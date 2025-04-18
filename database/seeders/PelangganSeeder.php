<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'nama_pelanggan' => 'Michelle Dorani',
                'no_telepon'     => '6285606319598',
                'alamat'         => 'Jl. Singosari No.17, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'nama_pelanggan' => 'Muhammad Al Fatih',
                'no_telepon'     => '6283159546301',
                'alamat'         => 'Jl. Purwodadi No. 88, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'nama_pelanggan' => 'Muhammad Farel',
                'no_telepon'     => '6282132570837',
                'alamat'         => 'Jl. Betek No. 10, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'nama_pelanggan' => 'Safiro Alfarisi',
                'no_telepon'     => '628983484850',
                'alamat'         => 'Jl. Sulfat No. 13, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'nama_pelanggan' => 'Keisya Nisrina',
                'no_telepon'     => '6288823890129',
                'alamat'         => 'Jl. Sama Walid No. 17, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'nama_pelanggan' => 'Brahim Diaz',
                'no_telepon'     => '6288934740920',
                'alamat'         => 'Jl. Sama Aku No. 88, Malang',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
        ];
        DB::table('t_pelanggan')->insert($data);
    }
}
