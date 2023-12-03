<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hargas')->insert([
            'jenis_paket' => 'Paket Gezit',
            'harga' => 202000,
            'biaya_admin' => 2500,
        ]);
    }
}
