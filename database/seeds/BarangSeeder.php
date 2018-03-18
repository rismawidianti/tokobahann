<?php

use Illuminate\Database\Seeder;
use App\Barang;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=10 ; $i++) { 
            $barang = new Barang();
            $barang->nama = "Baju Laki-laki ".$i;
            $barang->kategori_id = 2;
            $barang->foto = "l".$i.".jpg";
            $barang->harga = 500000;
            $barang->keterangan = "Baju Laki-laki ".$i;
            $barang->save();
        }
        for ($i=1; $i <=10 ; $i++) { 
            $barang = new Barang();
            $barang->nama = "Baju Perempuan ".$i;
            $barang->kategori_id = 1;
            $barang->foto = "baju".$i.".jpg";
            $barang->harga = 500000;
            $barang->keterangan = "Baju Perempuan ".$i;
            $barang->save();
        }
    }
}
