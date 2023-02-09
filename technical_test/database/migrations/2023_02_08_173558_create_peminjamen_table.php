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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->timestampTz('tanggal_peminjaman');
            $table->timestampTz('tanggal_kembali');
            $table->string('status');
            $table->unsignedBigInteger('id_kendaraan');
            $table->unsignedBigInteger('id_sopir');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraans');
            $table->foreign('id_sopir')->references('id_sopir')->on('sopirs');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
};
