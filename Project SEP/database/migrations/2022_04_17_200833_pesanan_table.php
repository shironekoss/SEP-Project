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
        Schema::create('pesanancart', function (Blueprint $table) {
            $table->bigIncrements('pesanancart_id');
            $table->bigInteger('menu_id')->unsigned();;
            $table->bigInteger('quantity');
            $table->bigInteger('akun_id')->unsigned();;
            $table->boolean('verifikasi');
            $table->foreign('menu_id')->references('menu_id')->on('menu')->onDelete('cascade');
            $table->foreign('akun_id')->references('akun_id')->on('akun')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanancart');
    }
};
