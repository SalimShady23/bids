<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use App\Models\Invoice;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class receiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $auction_id = $request->input('auction_id');
        $invoice_id = $request->input('invoice_id');

        $receiptObj = DB::table('receipt')->where('fk_invoice', $invoice_id)->first();


        if (empty($receiptObj)) {
            
            // create a new instance of receipt
            $receipt = new Receipt;

            if ($image = $request->file('receipt')) {
                $destinationPath = 'receipt/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $receipt->receipt_image = $profileImage;
                $receipt->fk_auction    = $auction_id;
                $receipt->fk_user       = Auth::user()->id;
                $receipt->fk_invoice    = $invoice_id;
            }

            if ($receipt->save()) {

                // create a new instance of notification
                $notification = new Notification;
                $notification->fk_user              = Auth::user()->id;
                $notification->fk_auction           = $auction_id;
                $notification->notification_type    = "RECEIPT";
                $notification->notification_status  = "UNREAD";
                $notification->save();
                
                return redirect('/invoice/' .$invoice_id)->with('receiptSuccess', 'Receipt has uploaded successfully');

            } else {

                echo "Failed to insert receipt";
            }

        } elseif ($receiptObj->receipt_status == "DENIED") {
            
            if ($image = $request->file('receipt')) {
                $destinationPath = 'receipt/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);

                $receipt_update = DB::table('receipt')
                ->where('fk_invoice', $invoice_id)
                ->update(['receipt_status' => 'PENDING']);

                $receipt_update_name = DB::table('receipt')
                ->where('fk_invoice', $invoice_id)
                ->update(['receipt_image' => $profileImage]);

                return redirect('/invoice/' .$invoice_id)->with('receiptSuccess', 'Receipt has uploaded successfully');

            }
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
}
