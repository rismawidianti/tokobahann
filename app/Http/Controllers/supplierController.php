<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\supplier;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $supplier = supplier::with('barang')->get();
        return view('supplier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = barang::all();
        return view('supplier.create', compact('barang'));
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
        $supplier = new supplier;
        $supplier->nama_supplier=$request->a;
        $supplier->alamat=$request->b;

        $supplier->notlp=$request->c;
        $supplier->barang_id=$request->d;
        $supplier->harga=$request->harga;
        $supplier->save();
        return redirect('supplier');
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
        $supplier = supplier::findOrFail($id);
        return view('supplier.show',compact('supplier'));
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
         $supplier = supplier::findOrFail($id);
        return view('supplier.edit',compact('supplier'));
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
        $supplier = supplier::findOrFail($id);
        $supplier->nama_supplier=$request->a;
        $supplier->alamat=$request->b;
        $supplier->notlp=$request->c;
        $supplier->harga=$request->harga;
        $supplier->save();
        return redirect('supplier');
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
         $supplier = supplier::findOrFail($id);
        $supplier->delete();
        return redirect('supplier');
    }
}
