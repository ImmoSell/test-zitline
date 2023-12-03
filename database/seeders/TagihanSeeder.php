<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tagihans')->insert([
            'customer_id' => 1, // Sesuaikan dengan customer_id yang sesuai
            'tanggal_jatuh_tempo' => '2023-11-12', // Format tanggal sesuai dengan database
            'custom_invoice' => 'no', // Sesuaikan dengan kebutuhan
            'jenis_paket' => null, // Sesuaikan dengan kebutuhan
            'status' => 'lunas', // Sesuaikan dengan kebutuhan
            'metode_pembayaran' => 'BRI', // Sesuaikan dengan kebutuhan
            'harga' => 204500,
            'periode' => '2023-12-15', // Format tanggal sesuai dengan database
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
