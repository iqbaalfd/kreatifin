<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    // Tambahkan ini agar field bisa diisi lewat coding
    protected $fillable = ['user_id', 'title', 'image', 'description'];

    // Relasi ke User (Satu portofolio milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}