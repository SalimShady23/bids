<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch buy now payments 
        $payments = DB::table('receipt')
        ->join('auction', 'receipt.fk_auction', '=', 'auction.id')
        ->join('users', 'receipt.fk_user', '=', 'users.id')
        ->join('invoice', 'receipt.fk_invoice', '=', 'invoice.id')
        ->select('auction.*', 'users.*', 'invoice.*', 'receipt.*')
        ->where('invoice.invoice_type', '=', 'BUY NOW')
        ->get();

        return view('admin.buy_now_payments', ['payments' => $payments]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = DB::table('receipt')
        // ->join('invoice', 'receipt.fk_invoice', '=', 'invoice.id')
        // ->join('users', 'receipt.fk_user', '=', 'users.id')
        // ->select('users.*', 'invoice.*', 'receipt.*')
        // ->where([
        //     ['invoice.invoice_type', '=', 'BUY NOW'],
        //     ['receipt.fk_user', '=', Auth::user()->id],
        // ])
        // ->get();

        $user = User::find($id);

        $invoice = DB::table('invoice')
        ->where('fk_user', '=', $id)
        ->get();

        $data = array(
            
            'user'    => $user,
            'invoice' => $invoice

        );
  
        return response()->json($data);
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

    public function controlPayment(Request $request)
    {
        // store form values in variable 
        $receipt_action = $request->input('receipt_action');
        $receipt_id     = $request->input('receipt_id');
        $invoice_id     = $request->input('invoice_id');
        $auction_id     = $request->input('auction_id');

        echo $receipt_action;
        echo "<br>";
        echo $receipt_id;
        echo "<br>";
        echo $invoice_id;
        echo "<br>";
        echo $auction_id;


        // if ($receipt_action == "APPROVE") {

        //     $receipt_update = DB::table('receipt')
        //     ->where('id', $receipt_id)
        //     ->update(['receipt_status' => 'PAID']);

        //     $invoice_update = DB::table('invoice')
        //     ->where('id', $invoice_id)
        //     ->update(['invoice_status' => 'PAID']);

        //     $auction_update = DB::table('auction')
        //     ->where('id', $auction_id)
        //     ->update(['auction_status' => 'COMPLETE']);

        //     return redirect('/admin/buy_now_payments')->with('paymentSuccess', 'Payment has been verified successfully');
            
        // } else if ($receipt_action == "DENY") {

        //     $receipt_update = DB::table('receipt')
        //     ->where('fk_auction', $auction_id)
        //     ->update(['receipt_status' => 'DENIED']);

        //     return redirect('/admin/buy_now_payments')->with('paymentSuccess', 'Payment has been denied successfully');
        // }
       
    }
}
