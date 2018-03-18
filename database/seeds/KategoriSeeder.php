<?php

use Illuminate\Database\Seeder;
use App\Kategori;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori();
        $kategori->nama = "Baju Muslim Anak Perempuan";
        $kategori->save();
        
        $kategori = new Kategori();
        $kategori->nama = "Baju Muslim Anak Laki-laki";
        $kategori->save();
    }
}
