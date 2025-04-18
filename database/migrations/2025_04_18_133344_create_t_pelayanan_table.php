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
        Schema::create('t_pelayanan', function (Blueprint $table) {
            $table->id('pelayanan_id'); // PK
            $table->string('jenis_pelayanan'); // Deepclean, repaint
            $table->integer('harga_pelayanan'); // harga layanan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pelayanan');
    }
};
