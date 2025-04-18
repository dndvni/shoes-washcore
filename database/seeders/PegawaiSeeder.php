<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_pegawai' => 'Dhamang Ramadhan',
                'username' => 'dhamangrhd',
                'email' => 'dhamang@gmail.com',
                'password' => Hash::make('dhamang123'),
                'no_hp' => '085194661250',
                'alamat' => 'Jl. Bareng Kulon No. 941a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Maman Ramadhan',
                'username' => 'mamanfr',
                'email' => 'maman@gmail.com',
                'password' => Hash::make('maman123'),
                'no_hp' => '082245566277',
                'alamat' => 'Jl. Candi II No. 512',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Adinda Mirza Devani',
                'username' => 'defuni',
                'email' => 'funi@gmail.com',
                'password' => Hash::make('funi123'),
                'no_hp' => '089514373011',
                'alamat' => 'Jl. Bareng Kulon No. 941a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Roesman Tianto',
                'username' => 'roesmantnt',
                'email' => 'roesman@gmail.com',
                'password' => Hash::make('roesman123'),
                'no_hp' => '082292044422',
                'alamat' => 'Jl. Bareng Kulon No. 941a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('t_pegawai')->insert($data);
    }
}
