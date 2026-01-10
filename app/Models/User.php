<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Atribut yang dapat diisi secara massal (Mass Assignable).
     * Field di sini disesuaikan dengan migration users agar data bisa masuk ke database.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',   // Menentukan apakah user atau kreator
        'city',   // Lokasi kreator
        'avatar', // Foto profil
        'bio',    // Deskripsi singkat
        'phone',  // Kontak WhatsApp
        'skill',  // Keahlian kreator
        'status', // Status ketersediaan (Available/Busy)
    ];

    /**
     * Atribut yang disembunyikan saat serialisasi (misal: API).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting atribut ke tipe data tertentu.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi: Satu User memiliki banyak Portofolio.
     * Digunakan untuk memanggil $user->portofolios di Controller/Blade.
     */
    public function portofolios()
    {
        return $this->hasMany(Portofolio::class);
    }
}