<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksipembelian extends Model
{
    //
    protected $table='transaksipembelians';
    protected $fillable=['tgl_transaksi','id_supplier','barang_id','jumlah','harga','totalharga'];
    protected $visible=['tgl_transaksi','id_supplier','barang_id','jumlah','harga','totalharga'];
    public $timestamps= true ;

     public function supplier()
    {
    	return $this->belongsTo('App\supplier','id_supplier');
    }

    public function barang()
    {
    	return $this->belongsTo('App\barang','barang_id');
    }
}
