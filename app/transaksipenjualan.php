<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksipenjualan extends Model
{
    //
    protected $table='transaksipenjualans';
    protected $fillable=['tgl_transaksi','nmpembeli','barang_id','notlp','alm','jumlah','harga','totalharga'];
    protected $visible=['tgl_transaksi','nmpembeli','barang_id','notlp','alm','jumlah','harga','totalharga'];
    public $timestamps= true ;

    public function barang()
    {
    	return $this->belongsTo('App\barang','barang_id');
    }

   
}
