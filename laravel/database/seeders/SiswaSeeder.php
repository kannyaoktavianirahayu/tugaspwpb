<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama'=>'Jijah',
            'umur'=>'17',
            'alamat'=>'ciborerang',
            'statuspekerjaan'=>'pelajar',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'ijah',
            'umur'=>'15',
            'alamat'=>'ciborerang',
            'statuspekerjaan'=>'pelajar',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'alam',
            'umur'=>'18',
            'alamat'=>'sompok',
            'statuspekerjaan'=>'pelajar',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
