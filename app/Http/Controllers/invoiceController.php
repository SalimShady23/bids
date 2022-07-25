<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch user invoices 
        $invoices = DB::table('invoice')
        ->join('auction', 'invoice.fk_auction', '=', 'auction.id')
        ->select('auction.*', 'invoice.*')
        ->where('invoice.fk_user', '=', Auth::user()->id)
        ->get();

        $paid_invoices = DB::table('invoice')
        ->join('auction', 'invoice.fk_auction', '=', 'auction.id')
        ->select('auction.*', 'invoice.*')
        ->where([
            ['invoice.fk_user', '=', Auth::user()->id],
            ['invoice.invoice_status', '=', 'PAID'],
        ])
        ->get();

        $unpaid_invoices = DB::table('invoice')
        ->join('auction', 'invoice.fk_auction', '=', 'auction.id')
        ->select('auction.*', 'invoice.*')
        ->where([
            ['invoice.fk_user', '=', Auth::user()->id],
            ['invoice.invoice_status', '=', 'PENDING'],
        ])
        ->get();

        return view('invoices', compact('invoices', 'paid_invoices', 'unpaid_invoices'));
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
        $invoice = DB::table('invoice')
        ->join('auction', 'invoice.fk_auction', '=', 'auction.id')
        ->join('users', 'invoice.fk_user', '=', 'users.id')
        ->select('invoice.*', 'users.first_name', 'users.last_name', 'users.business_name', 'users.mobile', 'users.region', 'users.street_address', 'auction.product_name', 'auction.condition', 'auction.district')
        ->where([
            ['invoice.fk_user', '=', Auth::user()->id],
            ['invoice.id', '=', $id],
        ])
        ->get();

        $tax       = $invoice[0]->invoice_amount / 10;
        $subtotal = $invoice[0]->invoice_amount - $tax; 

        $receipt = DB::table('receipt')->where('fk_invoice', $id)->first();
    
        return view('/invoice', compact('invoice', 'tax', 'subtotal', 'receipt'));
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
