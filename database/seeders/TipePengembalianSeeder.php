<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipePengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            ['jenis_pengambilan' => 'Antar'],
            ['jenis_pengambilan' => 'Ambil'],
            ['jenis_pengambilan' => 'COD'],
        ];
        DB::table('t_tipe_pengembalian')->insert($data);
    }
}
