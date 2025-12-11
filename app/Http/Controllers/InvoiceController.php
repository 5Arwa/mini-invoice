<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices=Invoice::all();
       return view('invoices.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('invoices.create');
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
        
        $Data=$request->validate([
        'invoice_name'=>'required|string|max:255',
        'amount'=>'required|numeric',
        'due_date'=>'required|date'
        ]);
  
        Invoice::create($Data);
        return redirect()->route('invoice.index')->with('success','invoice created successfully');
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
        $invoice=Invoice::findOrFail($id);
        return view('invoices.edit',compact('invoice'));
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
         $Data=$request->validate([
        'invoice_name'=>'required|string|max:255',
        'amount'=>'required|numeric',
        'due_date'=>'required|date'
        ]);
        $invoice=Invoice::findOrFail($id);
        $invoice->update($Data);
        return redirect()->route('invoice.index')->with('success','invoice updated successfully');
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
         $invoice=Invoice::findOrFail($id);
         $invoice->delete();
         return redirect()->route('invoice.index')->with('success','invoice deleted successfully');

    }
}
