<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Untuk link artikel
            $table->string('kategori');       // Misal: Sains, Sastra
            $table->text('ringkasan');        // <--- FITUR UNIK: Ringkasan Cepat
            $table->text('isi');              // Isi artikel lengkap
            $table->string('penulis');        // <--- FITUR UNIK: Nama Penulis
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};