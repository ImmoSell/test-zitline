<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Finance',
            'level' => 'admin',
            'email' => 'alex@zitline.net.id',
            'password' => bcrypt('zitline2023'),
            'remember_token' => Str::random(60), // Fix the typo here
        ]);
    }
}
