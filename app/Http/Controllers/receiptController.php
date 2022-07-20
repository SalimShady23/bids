<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;

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

        $receiptObj = Receipt::find($invoice_id);

        if ($invoice_id == $receiptObj->fk_invoice && $receiptObj->receipt_status == "PENDING") {
            return redirect('/invoice')->with('receiptError', 'Receipt has already been uploaded, await for your verification and you will be notified');
        } else {

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
            
            return redirect('/invoice')->with('receiptSuccess', 'Receipt has uploaded successfully');

        } else {
            echo "Failed to insert receipt";
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
