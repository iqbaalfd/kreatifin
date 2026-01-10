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
    Schema::create('portofolios', function (Blueprint $table) {
        $table->id();
        // Kolom relasi ke user (kreator)
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        
        // Kolom data portofolio sesuai Figma
        $table->string('title'); // Judul karya
        $table->string('image'); // Nama file gambar
        $table->text('description'); // Penjelasan karya
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
