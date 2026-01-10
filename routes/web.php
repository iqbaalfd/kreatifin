<?php

use App\Models\User;
use App\Models\Portofolio; // Tambahkan ini agar tidak error
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FreelancerController;

/*
|--------------------------------------------------------------------------
| Kreatifin - Web Routes Configuration
|--------------------------------------------------------------------------
*/

/**
 * PUBLIC ROUTES
 * Halaman yang bisa diakses tanpa login.
 */
Route::get('/', function () {
    // Mengambil 3 kreator dengan jumlah portofolio terbanyak
    $kreators = User::where('role', 'kreator')
        ->withCount('portofolios') // Menghitung jumlah relasi portofolio
        ->orderBy('portofolios_count', 'desc') // Urutkan dari yang paling banyak karyanya
        ->take(3)
        ->get();

    return view('welcome', compact('kreators'));
})->name('home');

// Halaman Marketplace / Cari Kreator
Route::controller(FreelancerController::class)->group(function () {
    Route::get('/cari-kreator', 'index')->name('kreator.cari');
    Route::get('/explore', 'index')->name('kreator.index');
    Route::get('/kreator/{id}', 'show')->name('kreator.show');
    Route::get('/detail-kreator/{id}', 'show')->name('kreator.detail');
});

// Halaman Statis
Route::view('/tentang-kami', 'about')->name('about');


/**
 * PROTECTED ROUTES (ALL USERS)
 * Bisa diakses oleh User biasa maupun Kreator selama sudah login.
 */
Route::middleware('auth')->group(function () {
    // Pengaturan Profil dasar (Email, Password, dll)
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});


/**
 * EXCLUSIVE ROUTES (KREATOR ONLY)
 * Hanya bisa diakses oleh user dengan role 'kreator'.
 */
Route::middleware(['auth', 'verified', 'kreator'])->group(function () {
    
    // Dashboard Kreator
    Route::get('/dashboard', function () {
        $user = auth()->user();
        $portofolios = $user->portofolios()->latest()->get(); 
        return view('dashboard', compact('portofolios'));
    })->name('dashboard');

    // Manajemen Portofolio (CRUD)
    Route::controller(FreelancerController::class)->prefix('portofolio')->name('portofolio.')->group(function () {
        Route::get('/tambah', 'create')->name('create');
        Route::post('/simpan', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/hapus', 'destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';