<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use App\barang;
use App\transaksipembelian;

class transaksipembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $transaksipembelian = transaksipembelian::all();
        return view('transaksipembelian.index',compact('transaksipembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = supplier::all();
        $barang = barang::all();
        return view('transaksipembelian.create', compact('supplier','barang'));
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
        $tanggal = date('Y-m-d');
        $tanggal = date('H-i-s');

        $transaksipembelian = new transaksipembelian;
        $transaksipembelian->tgl_transaksi=$request->tgl_transaksi;
        $transaksipembelian->id_supplier=$request->id_supplier;
        $transaksipembelian->barang_id=$request->barang_id;
        $transaksipembelian->jumlah=$request->jumlah;
      
       

        $a = supplier::where('id',$request->id_supplier)->first();
        $b = $a->harga;

        $transaksipembelian->harga=$b;
        $transaksipembelian->totalharga=$request->jumlah*$b;

        $transaksipembelian->save();
        
        $barang = Barang::find($request->barang_id);
        $barang->jumlah_barang = $barang->jumlah_barang + $request->jumlah;
        $barang->save();
        return redirect('transaksipembelian');
    
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
        $transaksipembelian = transaksipembelian::findOrFail($id);
        return view('transaksipembelian.show',compact('transaksipembelian'));
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
         $transaksipembelian = transaksipembelian::findOrFail($id);
        $supplier = supplier::all();
        $barang = barang::all();
        return view('transaksipembelian.edit',compact('transaksipembelian','supplier','barang'));
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
        $transaksipembelian = transaksipembelian::findOrFail($id);
        $transaksipembelian->tgl_transaksi=$request->tgl_transaksi;
        $transaksipembelian->id_supplier=$request->a;
        $transaksipembelian->barang_id=$request->b;
        $harga = barang::find($request->b);
        $transaksipembelian->totalharga=$harga->harga_barang*$request->c;
        $harga->jumlah_barang = ($harga->jumlah_barang - $transaksipembelian->jumlah) + $request->c;
        $transaksipembelian->jumlah=$request->c;
        $harga->save();
        $transaksipembelian->save();
         return redirect('transaksipembelian');
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
         $transaksipembelian = transaksipembelian::findOrFail($id);
        $transaksipembelian->delete();
        return redirect('transaksipembelian');
    }
}
