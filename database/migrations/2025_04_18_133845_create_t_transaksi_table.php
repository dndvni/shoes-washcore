<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_transaksi', function (Blueprint $table) {
            $table->id('transaksi_id'); // PK
            $table->unsignedBigInteger('pegawai_id'); // relasi dari t_pegawai
            $table->unsignedBigInteger('pelanggan_id'); // relasi dari t_pelanggan
            $table->unsignedBigInteger('pelayanan_id'); // relasi dari t_playanan
            $table->unsignedBigInteger('tipe_sepatu_id'); // relasi dari t_tipe_sepatu
            $table->unsignedBigInteger('pengembalian_id'); // relasi dari t_tipe_pengambilan
            $table->dateTime('tanggal_transaksi'); 
            $table->integer('total_harga'); 
            $table->timestamps();

            // FK
            $table->foreign('pegawai_id')->references('pegawai_id')->on('t_pegawai')->onDelete('cascade');
            $table->foreign('pelanggan_id')->references('pelanggan_id')->on('t_pelanggan')->onDelete('cascade');
            $table->foreign('pelayanan_id')->references('pelayanan_id')->on('t_pelayanan')->onDelete('cascade');
            $table->foreign('tipe_sepatu_id')->references('tipe_sepatu_id')->on('t_tipe_sepatu')->onDelete('cascade');
            $table->foreign('pengembalian_id')->references('pengembalian_id')->on('t_tipe_pengembalian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_transaksi');
    }
};
