<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $table = 'suppliers'; 
    protected $fillable=['nama_supplier','alamat','harga','notlp','barang_id'];
    protected $visible=['nama_supplier','alamat','harga','notlp','barang_id'];
    public $timestamp = true;
    
    public function barang()
    {
    	return $this->belongsTo('App\barang');
    }
}
