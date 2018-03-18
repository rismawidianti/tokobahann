<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksipenjualan;
use PDF;

class penjualanController extends Controller
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
        return view('laporan.penjualan',compact('transaksipenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
    {
        //
     $a = $request->a;
     $b = $request->b;
     $transaksipenjualan = transaksipenjualan::whereBetween('created_at', [$a, $b])->get();
     // dd($transaksipenjualan);
     $sum = $transaksipenjualan->sum('totalharga');
        return view('laporan.penjualan1', compact('transaksipenjualan','a','b','sum'));

         

    }

    // public function index3(Request $request){
    //     $a = $request->a; 
    //     $b = $request->b;
    //     $transaksipenjualan = transaksipenjualan::whereBetween('created_at', [$a, $b])->get(); 
    //     $sum = $transaksipenjualan->sum('totalharga');
    //   $user = Penjualan::all();
    //   $pdf = PDF::loadView('laporan.penjualan1', compact('user','a','b','sum'));
    //   return $pdf->download('laporan.pdf');
    // }
}
