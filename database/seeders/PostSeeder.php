<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'judul' => 'Mengapa Bau Hujan Begitu Menenangkan? Penjelasan Ilmiah Petrichor',
                'slug' => 'penjelasan-ilmiah-petrichor',
                'kategori' => 'Sains Populer',
                'penulis' => 'Dr. Awan Setiawan',
                'ringkasan' => 'Pernahkah Anda bertanya-tanya mengapa aroma tanah basah setelah hujan terasa begitu enak? Ternyata ada bakteri dan minyak tanaman yang berperan di sana.',
                'isi' => '<p>Aroma khas yang muncul saat hujan turun ke tanah kering disebut <strong>Petrichor</strong>. Istilah ini diciptakan oleh ilmuwan Australia pada tahun 1964.</p><h3>Peran Bakteri Actinobacteria</h3><p>Salah satu komponen utama bau ini adalah senyawa organik bernama <em>geosmin</em>, yang diproduksi oleh bakteri tertentu di dalam tanah.</p><p>Hidung manusia sangat sensitif terhadap geosmin, bahkan lebih sensitif daripada hiu terhadap darah di air.</p>',
                'gambar' => 'https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?auto=format&fit=crop&w=800&q=80', // Gambar Hujan
            ],
            [
                'judul' => 'Resensi Buku: "Sapiens" Karya Yuval Noah Harari',
                'slug' => 'resensi-buku-sapiens',
                'kategori' => 'Resensi Buku',
                'penulis' => 'Ratna Pustaka',
                'ringkasan' => 'Sebuah perjalanan singkat sejarah umat manusia. Bagaimana Homo Sapiens yang lemah bisa mendominasi planet bumi?',
                'isi' => '<p><strong>Sapiens</strong> bukan sekadar buku sejarah. Ini adalah narasi filosofis tentang asal-usul kita.</p><blockquote>"Revolusi Kognitif adalah titik balik di mana manusia mulai mempercayai hal-hal yang tidak nyata seperti negara, uang, dan hukum."</blockquote><p>Buku ini wajib dibaca bagi siapa saja yang ingin memahami struktur masyarakat modern.</p>',
                'gambar' => 'https://images.unsplash.com/photo-1491841550275-ad7854e35ca6?auto=format&fit=crop&w=800&q=80', // Gambar Buku
            ],
            [
                'judul' => 'Sejarah Runtuhnya Perpustakaan Alexandria',
                'slug' => 'sejarah-perpustakaan-alexandria',
                'kategori' => 'Sejarah Dunia',
                'penulis' => 'Prof. Historian',
                'ringkasan' => 'Kehilangan terbesar dalam sejarah ilmu pengetahuan. Ribuan gulungan papirus hangus, dan bersamanya hilanglah kebijaksanaan kuno.',
                'isi' => '<p>Perpustakaan Alexandria di Mesir pernah menjadi pusat ilmu pengetahuan dunia. Di sinilah Eratosthenes pertama kali menghitung keliling bumi.</p><p>Kehancurannya tidak terjadi dalam satu malam, melainkan melalui serangkaian perang dan kerusuhan sipil selama berabad-abad.</p>',
                'gambar' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80', // Gambar Perpustakaan Klasik
            ],
            [
                'judul' => 'Teknik Pomodoro: Cara Belajar Efektif Tanpa Burnout',
                'slug' => 'teknik-belajar-pomodoro',
                'kategori' => 'Tips Edukasi',
                'penulis' => 'Budi Santoso',
                'ringkasan' => 'Sulit fokus saat belajar? Coba teknik manajemen waktu sederhana ini: 25 menit kerja, 5 menit istirahat.',
                'isi' => '<p>Otak manusia memiliki batas fokus. Memaksakan belajar 3 jam nonstop justru tidak efektif.</p><ul><li><strong>Langkah 1:</strong> Set timer 25 menit.</li><li><strong>Langkah 2:</strong> Fokus total satu tugas.</li><li><strong>Langkah 3:</strong> Istirahat 5 menit setelah timer bunyi.</li></ul>',
                'gambar' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80', // Gambar Belajar
            ],
        ];

        foreach ($posts as $item) {
            // Kita simpan URL gambar langsung ke database untuk kesederhanaan awal
            // (Nanti bisa diubah jadi logika upload file jika fitur admin sudah jadi)
            Post::create($item);
        }
    }
}