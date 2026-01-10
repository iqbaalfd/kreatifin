<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Kolom utama untuk membedakan user biasa dan kreator
            $table->string('role')->default('user')->after('email');
            
            // Kolom pendukung profil kreator (agar tidak error di halaman cari)
            $table->string('skill')->nullable()->after('role');
            $table->text('bio')->nullable()->after('skill');
            $table->string('city')->nullable()->after('bio');
            $table->string('avatar')->nullable()->after('city');
            $table->string('status')->default('Available')->after('avatar');
            $table->string('phone')->nullable()->after('status'); // Untuk link WhatsApp nanti
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kembali kolom jika migrasi di-rollback
            $table->dropColumn(['role', 'skill', 'bio', 'city', 'avatar', 'status', 'phone']);
        });
    }
};