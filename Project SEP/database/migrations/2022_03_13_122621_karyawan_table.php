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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('karyawan_id');
            $table->string('nama_karyawan',50);
            $table->string('alamat_karyawan');
            $table->date('tgl_lahir');
            $table->char('jk_karyawan',1);
            $table->string('jabatan_karyawan',50);
            $table->string('no_telp',14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
};
