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
        Schema::create('t_pelanggan', function (Blueprint $table) {
            $table->id('pelanggan_id'); // PK
            $table->string('nama_pelanggan'); // nama lengkap pelanggan
            $table->text('alamat'); // alamat lengkap pelanggan
            $table->bigInteger('no_telepon'); // No HP Pelanggan 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pelanggan');
    }
};
