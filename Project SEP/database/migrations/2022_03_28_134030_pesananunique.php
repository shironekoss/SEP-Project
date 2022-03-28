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
        Schema::create('pesananunique', function (Blueprint $table) {
            $table->bigIncrements('pesananunique_id');
            $table->bigInteger('antrian_id')->unsigned();
            $table->bigInteger('meja_id')->unsigned();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('metodepayment_id')->unsigned();
            $table->foreign('antrian_id')->references('antrian_id')->on('antrian');
            $table->foreign('meja_id')->references('akun_id')->on('akun')->onDelete('cascade');
            $table->foreign('karyawan_id')->references('akun_id')->on('akun')->onDelete('cascade');
            $table->foreign('metodepayment_id')->references('metodepayment_id')->on('metodepayment')->onDelete('cascade');
            $table->date('tgl_pesanan');
            $table->dateTime('waktu_pesanan');
            $table->string('status_pesanan',50);
            $table->integer('grandtotal_pesanan');
        });


        Schema::create('pesananuniquedetail', function (Blueprint $table) {
            $table->bigIncrements('pesananuniquedetail_id');
            $table->bigInteger('pesananunique_id')->unsigned();
            $table->bigInteger('bahan_id')->unsigned();
            $table->foreign('pesananuniquedetail_id')->references('pesananunique_id')->on('pesananunique')->onDelete('cascade');
            $table->foreign('bahan_id')->references('bahan_id')->on('bahan')->onDelete('cascade');
            $table->integer('harga_bahan');
            $table->integer('quantity_bahan');
            $table->string('Catatan_bahan');
            $table->integer('subtotal_pesananunique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesananunique');
        Schema::dropIfExists('pesananuniquedetail');
    }
};
