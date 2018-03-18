<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\transaksipenjualan;
use Redirect;

class transaksipenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $transaksipenjualan = transaksipenjualan::all();
        return view('transaksipenjualan.index',compact('transaksipenjualan'));

    }

    /**transaksipenjualan
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $transaksipenjualan = transaksipenjualan::all();
         $barang = Barang::all();
        return view('transaksipenjualan.create', compact('barang','transaksipenjualan'));
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

        $transaksipenjualan = new transaksipenjualan;
        $transaksipenjualan->tgl_transaksi=$request->tgl_transaksi;
        $transaksipenjualan->nmpembeli=$request->nmpembeli;
        $transaksipenjualan->notlp=$request->notlp;
        $transaksipenjualan->alm=$request->alm;
        $transaksipenjualan->jumlah=$request->jumlah;
        $transaksipenjualan->barang_id=$request->barang_id;

        $a = barang::where('id',$request->barang_id)->first();
        $b = $a->harga;
        // dd($b);

        $transaksipenjualan->harga=$b;
        $transaksipenjualan->totalharga=$request->jumlah*$b;

  
        $transaksipenjualan->save();
        
        $barang = Barang::find($request->b);
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;
        $barang->save();
        return redirect('transaksipenjualan');
        
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
         $transaksipenjualan = transaksipenjualan::findOrFail($id);
        return view('transaksipenjualan.show',compact('transaksipenjualan'));
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
        $transaksipenjualan = transaksipenjualan::findOrFail($id);
        $barang = Barang::all();
        return view('transaksipenjualan.edit',compact('transaksipenjualan','barang'));
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
        $transaksipenjualan = transaksipenjualan::findOrFail($id);
        $barang = Barang::all();
        $transaksipenjualan->tgl_transaksi=$request->tgl_transaksi;
        $transaksipenjualan->nmpembeli=$request->nmpembeli;
        $transaksipenjualan->notlp=$request->notlp;
        $transaksipenjualan->alm=$request->alm;
        $transaksipenjualan->jumlah=$request->jumlah;
        $transaksipenjualan->harga=$request->harga;
        $transaksipenjualan->totalharga=$request->jumlah*$request->harga;
         $transaksipenjualan->barang_id=$request->barang_id;
        $transaksipenjualan->save();
        return redirect('transaksipenjualan');
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
        $transaksipenjualan = transaksipenjualan::findOrFail($id);
        $transaksipenjualan->delete();
        return redirect('transaksipenjualan');
    }
}
