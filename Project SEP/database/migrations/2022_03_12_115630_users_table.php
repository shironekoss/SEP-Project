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
        Schema::create('akun', function (Blueprint $table) {
            $table->bigIncrements('akun_id');
            $table->string('akun_user',12)->unique();
            $table->string('akun_nama',20);
            $table->string('akun_password');
            $table->string('akun_role',20);
            $table->string('status',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun');
    }
};
