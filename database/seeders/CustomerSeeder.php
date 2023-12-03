<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'nama' => 'Juan Erlangga',
            'alamat' => 'padang cermin',
            'jeniskelamin' => 'laki-laki',
            'notelpon' => '082245871',
            'notiflunas' => 'ya',
        ]);
    }
}
