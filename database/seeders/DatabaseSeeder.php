<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun Admin Utama
        User::factory()->create([
            'name' => 'Admin Lentera',
            'email' => 'admin@lentera.com',
            'password' => bcrypt('password'), // Password standar
        ]);

        // 2. Panggil Seeder Artikel
        $this->call(PostSeeder::class);
    }
}