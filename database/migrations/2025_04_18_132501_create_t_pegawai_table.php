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
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->id('pegawai_id'); // PK
            $table->string('nama_pegawai'); // nama lngkp
            $table->string('username'); // untuk logim 
            $table->string('email')->unique(); // email hrs unique
            $table->string('password'); // hash
            $table->bigInteger('no_hp');
            $table->text('alamat');
            $table->timestamps(); // bwt created_at sm updated_ad
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pegawai');
    }
};
