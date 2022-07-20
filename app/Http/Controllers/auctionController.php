<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class auctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions = DB::table('auction')
        ->where([
            ['fk_user', '<>', Auth::user()->id],
            ['auction_status', '=', 'PENDING'],
        ])
        ->get();

        return view('auction', ['auctions' => $auctions]);
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

        // create new auction instance model 
        $auction = new Auction;
        $auction->auction_title         = $request->input('auction_title');
        $auction->start_date            = $request->input('start_date');
        $auction->start_time            = $request->input('start_time');
        $auction->end_date              = $request->input('end_date');
        $auction->end_time              = $request->input('end_time');
        $auction->live_start_date       = $request->input('live_start_date');
        $auction->live_start_time       = $request->input('live_start_time');
        $auction->live_end_time         = $request->input('live_end_time');
        $auction->reserve_price         = $request->input('reserve_price');
        $auction->minimum_bid_price     = $request->input('minimum_bid_price');
        $auction->buy_now               = $request->input('radioBuyNowButton');
        $auction->buy_now_price         = $request->input('buy_now_price');
        $auction->product_name          = $request->input('product_name');
        $auction->product_description   = $request->input('product_description');

        if ($image = $request->file('product_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $auction->product_image         = $profileImage;
        }

        $auction->num_bids              = 0;
        $auction->condition             = $request->input('condition');
        $auction->district              = $request->input('district');
        $auction->street_address        = $request->input('street_address');
        $auction->bid_increment         = $request->input('bid_increment');
        $auction->current_bid           = 0;
        $auction->fk_category           = $request->input('fk_category');
        $auction->fk_subcategory        = $request->input('fk_subcategory');
        $auction->fk_user               = Auth::user()->id;

        if ($auction->save()) {
            return redirect('/my-auctions')->with('success', 'Auction created successfully');
        } else {
            echo "Failed";
        }
        


        //echo $request->file('product_image')->getClientOriginalExtension();
        

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auction = DB::table('auction')
        ->join('category', 'auction.fk_category', '=', 'category.id')
        ->join('sub_category', 'auction.fk_subcategory', '=', 'sub_category.id')
        ->select('auction.*')
        ->where('auction.id', '=', $id)
        ->get();

        $bidders = DB::table('bid')
        ->join('users', 'bid.fk_user', '=', 'users.id')
        ->select('bid.*', 'users.first_name', 'users.last_name')
        ->where('bid.fk_auction', '=', $id)
        ->get();

        return view('view-auction', compact('auction', 'bidders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBuyNow($id)
    {
        $auction = DB::table('auction')
        ->join('category', 'auction.fk_category', '=', 'category.id')
        ->join('sub_category', 'auction.fk_subcategory', '=', 'sub_category.id')
        ->select('auction.*')
        ->where('auction.id', '=', $id)
        ->get();

        $bidders = DB::table('bid')
        ->join('users', 'bid.fk_user', '=', 'users.id')
        ->select('bid.*', 'users.first_name', 'users.last_name')
        ->where('bid.fk_auction', '=', $id)
        ->get();

        return view('buy-now', compact('auction', 'bidders'));
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

    public function myAuctions()
    {
        $auctions = DB::table('auction')
        ->join('category', 'auction.fk_category', '=', 'category.id')
        ->join('sub_category', 'auction.fk_subcategory', '=', 'sub_category.id')
        ->select('auction.*')
        ->where('auction.fk_user', '=', Auth::user()->id)
        ->get();

        return view('my-auctions', ['auctions' => $auctions]);
    }

}
