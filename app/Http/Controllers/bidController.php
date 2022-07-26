<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Notification;
use DateTime;

class bidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch users bids 
        $bids = DB::table('bid')
        ->join('auction', 'bid.fk_auction', '=', 'auction.id')
        ->join('users', 'bid.fk_user', '=', 'users.id')
        ->select('auction.*', 'users.*', 'bid.bid_amount')
        ->where('bid.fk_user', '=', Auth::user()->id)
        ->get();

        return view('my-bids', ['bids' => $bids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store hidden form values in variables 
        $auction_id        = $request->input('auction_id');
        $current_bid       = $request->input('current_bid');
        $minimum_bid_price = $request->input('minimum_bid_price');
        $num_bids          = $request->input('num_bids');
        $bid_increment     = $request->input('bid_increment');
        $start_date        = $request->input('start_date');
        $end_date          = $request->input('end_date');

        // store total amount value in variable 
        $min_bid_increment = $minimum_bid_price + $bid_increment;
        $cur_bid_increment = $current_bid + $bid_increment;

        if ($num_bids == 0) {

            $request->validate([
                'bid_amount'  => ['required', 'numeric', 'gte:' .$min_bid_increment],
            ]);

        } else if ($num_bids > 0) {

            $request->validate([
                'bid_amount'  => ['required', 'numeric', 'gte:' .$cur_bid_increment],
            ]);

        }


        if (Auth::user()->user_status == "PENDING") {
            
            return redirect('/auction')->with('statusError', 'Complete profile details in order to start bidding');

        } else {

            $auction = Auction::find($auction_id);

            // update category column
            $auction->current_bid = $request->input('bid_amount');
            $auction->num_bids++;

            if ($auction->save()) {

                // create a new bid instance 
                $bid = new Bid;
                $bid->fk_auction = $auction->id;
                $bid->fk_user    = Auth::user()->id;
                $bid->bid_amount = $request->input('bid_amount');
                $bid->save();

                return redirect('auction')->with('success', 'Bid submitted successfully');

            } else {
                echo "Failed to bid";;
            }

            // $datetime1 = new DateTime($start_date);
            // $datetime2 = new DateTime($end_date);
            // $interval = $datetime1->diff($datetime2);
            // $days = $interval->format('%a');//now do whatever you like with $days

            // $to = \Carbon\Carbon::createFromFormat('Y-m-d', $start_date);

            // $from = \Carbon\Carbon::createFromFormat('Y-m-d', $end_date);

            // $diff_in_days = $to->diffInDays($from);

            // print_r($diff_in_days); // Output: 1

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buyNow(Request $request)
    {
        // store form values in variable 
        $auction_id = $request->input('auction_id');
        $invoice_amount = $request->input('invoice_amount');
        
        $invoiceObj = DB::table('invoice')->where('fk_auction', $auction_id)->first();

        if (empty($invoiceObj)) {

            // create a new instance of invoice 
            $invoice = new Invoice;
            $invoice->fk_auction     = $auction_id;
            $invoice->fk_user        = Auth::user()->id;
            $invoice->invoice_amount = $invoice_amount;
            if ($invoice_amount > 5000000) {
                $invoice->payment_method = "BANK";
            } else {
                $invoice->payment_method = "M-PESA";
            }
            $invoice->invoice_type   = "BUY NOW";

            if ($invoice->save()) {

                $buy_now_update = DB::table('auction')
                ->where('id', $auction_id)
                ->update(['buy_now_status' => 1]);

                // create a new instance of notification
                $notification = new Notification;
                $notification->fk_user              = Auth::user()->id;
                $notification->fk_auction           = $auction_id;
                $notification->notification_type    = "BUY NOW";
                $notification->notification_status  = "UNREAD";
                $notification->save();

                return redirect('/invoice/'.$invoice->id);

            }

        }
              
        // } else if ($auction_id == $invoiceObj->fk_auction && Auth::user()->id == $invoiceObj->fk_user) {

        //     return redirect('/invoice')->with('invoiceError', 'Invoice has already been created, pay the required amount to obtain your item');

        // }

    }
}
