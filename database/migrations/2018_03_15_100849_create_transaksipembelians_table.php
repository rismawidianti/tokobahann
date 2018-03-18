<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksipembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipembelians', function (Blueprint $table) {
             $table->increments('id');
             $table->date('tgl_transaksi');
            $table->integer('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id')
                    ->on('suppliers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')
                    ->on('barangs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('totalharga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksipembelians');
    }
}
