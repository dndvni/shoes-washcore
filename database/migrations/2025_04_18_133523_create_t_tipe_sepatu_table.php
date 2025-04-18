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
        Schema::create('t_tipe_sepatu', function (Blueprint $table) {
            $table->id('tipe_sepatu_id'); // PK
            $table->string('jenis_sepatu'); // canvas, boots
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tipe_sepatu');
    }
};
