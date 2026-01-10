<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Portofolio; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Kreator (Iqbal Fadillah)
        $kreator = User::updateOrCreate(
            ['email' => 'iqbal@example.com'], // Email baru kamu
            [
                'name' => 'Iqbal Fadillah',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Tambah Portofolio untuk Iqbal
        Portofolio::create([
            'user_id' => $kreator->id,
            'title' => 'Cinematic Video Profile 2024', 
            'image' => 'portfolio1.jpg', 
            'description' => 'Project pengerjaan video profile perusahaan dengan gaya cinematic dan modern.',
        ]);
    }
}