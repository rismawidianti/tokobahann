<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table ='barangs';
    protected $fillable = ['nama_barang','jumlah_barang','harga','foto'];
    protected $visible = ['nama_barang','jumlah_barang','harga','foto'];
    
    public function supplier()
    {
    	return $this->hasMany('App\supplier');
    }
}
