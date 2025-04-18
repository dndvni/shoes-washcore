<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeSepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            ['jenis_sepatu' => 'Sneakers'],
            ['jenis_sepatu' => 'Running Shoes'],
            ['jenis_sepatu' => 'Loafers'],
            ['jenis_sepatu' => 'Hiking Boots'],
            ['jenis_sepatu' => 'Football Shoes'],
        ];
        DB::table('t_tipe_sepatu')->insert($data);
    }
}
