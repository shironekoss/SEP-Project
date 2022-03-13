<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->bigIncrements('pesanan_id');
            $table->bigInteger('antrian_id')->unsigned();
            $table->bigInteger('meja_id')->unsigned();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->foreign('antrian_id')->references('antrian_id')->on('antrian');
            $table->foreign('meja_id')->references('meja_id')->on('meja');
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawan');
            $table->date('tgl_pesanan');
            $table->dateTime('waktu_pesanan');
            $table->string('status_pesanan',50);
            $table->integer('grandtotal_pesanan');
            $table->string('method_payment');
        });

        Schema::create('pesanan_detail', function (Blueprint $table) {
            $table->bigIncrements('pesanandetail_id');
            $table->bigInteger('pesanan_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->foreign('pesanan_id')->references('pesanan_id')->on('pesanan');
            $table->foreign('menu_id')->references('menu_id')->on('menu');
            $table->integer('harga_menu');
            $table->integer('quantity_menu');
            $table->string('Catatan_menu');
            $table->integer('subtotal_pesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
