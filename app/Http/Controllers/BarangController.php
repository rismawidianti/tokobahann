<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\supplier;
use redirect;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $barang = Barang::All();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga = $request->harga;
        //isi filed cover juika ada cover yang diupload
        if($request->hasFile('foto')){
            //mengambil file yang di upload
            $uploaded_foto = $request->file('foto');
            //mengambil extention file
            $extention = $uploaded_foto->getClientOriginalExtension();
            //membuat nama file rendom berikut extention
            $filename = md5(time()).'.'.$extention;

            //menyimpan foto 
            $destinationPath = public_path(). DIRECTORY_SEPARATOR.'img';
            $uploaded_foto->move($destinationPath,$filename);

            //mengisi field
            $barang->foto = $filename;
        }
       
        $barang->save();
        return redirect()->route('barang.index');
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
        $barang = Barang::find($id);
        return view('barang.edit')->with(compact('barang'));
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
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga = $request->harga;
        
        if (empty($request->foto)) {
           $barang->foto    = $barang->foto;
        } else {
            //isi filed cover juika ada cover yang diupload
            if($request->hasFile('foto')){
                //mengambil file yang di upload
                $uploaded_foto = $request->file('foto');
                //mengambil extention file
                $extention = $uploaded_foto->getClientOriginalExtension();
                //membuat nama file rendom berikut extention
                $filename = md5(time()).'.'.$extention;

                //menyimpan foto 
                $destinationPath = public_path(). DIRECTORY_SEPARATOR.'img';
                $uploaded_foto->move($destinationPath,$filename);

                //mengisi field
                $barang->foto = $filename;
            }
        }
        
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
