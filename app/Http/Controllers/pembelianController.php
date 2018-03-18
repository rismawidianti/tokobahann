<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksipembelian;
use App\pembelian;

class pembelianController extends Controller
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
        return view('laporan.pembelian',compact('transaksipembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index2(Request $request)
   {
     $a = $request->a;
     $b = $request->b;
     $transaksipembelian = transaksipembelian::whereBetween('created_at', [$a, $b])->get();
     $sum = $transaksipembelian->sum('totalharga');
        return view('laporan.pembelian1', compact('transaksipembelian','a','b','sum'));
    }

    public function show()
    {
        # code...
    }
}
