<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksipenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipenjualans', function (Blueprint $table) {
           $table->increments('id');
            $table->date('tgl_transaksi');
            $table->string('nmpembeli');
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')
                    ->on('barangs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('notlp');
            $table->text('alm');
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
        Schema::dropIfExists('transaksipenjualans');
    }
}
