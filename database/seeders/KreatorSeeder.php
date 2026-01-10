<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KreatorSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'Fajril Ramadhan', 'skill' => 'Logo Designer', 'bio' => 'Ahli dalam pembuatan logo minimalis.'],
            ['name' => 'Andini Putri', 'skill' => 'UI/UX Designer', 'bio' => 'Fokus pada pengalaman pengguna yang elegan.'],
            ['name' => 'Budi Santoso', 'skill' => 'Videographer', 'bio' => 'Melayani jasa edit video cinematic.'],
            ['name' => 'Citra Lestari', 'skill' => 'Copywriter', 'bio' => 'Menulis caption dan artikel yang menjual.'],
            ['name' => 'Dedi Kurniawan', 'skill' => 'Web Developer', 'bio' => 'Membangun website dengan Laravel dan Tailwind.'],
            ['name' => 'Eka Jaya', 'skill' => 'Illustrator', 'bio' => 'Spesialis ilustrasi wajah dan karakter.'],
            ['name' => 'Farhan Hakim', 'skill' => 'Photographer', 'bio' => 'Jasa foto produk dan wedding.'],
            ['name' => 'Gisella', 'skill' => 'Social Media Manager', 'bio' => 'Membantu branding akun bisnis Anda.'],
            ['name' => 'Hendra Setiawan', 'skill' => '3D Artist', 'bio' => 'Membuat aset 3D untuk game dan arsitektur.'],
            ['name' => 'Indah Permata', 'skill' => 'Voice Over', 'bio' => 'Pengisi suara untuk iklan dan narasi.'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'email' => strtolower(str_replace(' ', '', $item['name'])) . '@example.com',
                'password' => Hash::make('password123'),
                'role' => 'kreator',
                'skill' => $item['skill'],
                'bio' => $item['bio'],
                'status' => 'Available',
            ]);
        }
    }
}