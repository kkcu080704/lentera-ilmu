<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Agar semua kolom bisa diisi (mass assignment)
    protected $guarded = [];

    /**
     * FITUR UNIK: Accessor untuk menghitung estimasi waktu baca otomatis.
     * Cara panggil di Blade nanti: {{ $post->reading_time }}
     */
    public function getReadingTimeAttribute()
    {
        // 1. Bersihkan tag HTML dari isi artikel (hanya ambil teksnya)
        $cleanContent = strip_tags($this->isi);
        
        // 2. Hitung jumlah kata
        $wordCount = str_word_count($cleanContent);
        
        // 3. Rumus: Rata-rata orang membaca 200 kata per menit
        // Fungsi ceil() membulatkan ke atas (misal 1.2 menit jadi 2 menit)
        $minutes = ceil($wordCount / 200);

        // Jika kurang dari 1 menit, tetap hitung 1 menit
        return $minutes < 1 ? 1 : $minutes;
    }
}