# 🕯️ Lentera Ilmu - Smart Literacy Blog Platform
---

## ✍️ Lembar Identitas Pengembang

Dokumentasi ini disusun untuk memenuhi kriteria penilaian **Ujian Akhir Semester (UAS)** pada mata kuliah Pemrograman Web Lanjut.

### 👤 Data Pribadi
* **Nama Lengkap:** Ranji Kurnia
* **Nomor Pokok Mahasiswa:** C2383207010
* **Kelas:** PTI5A

### 🎓 Keterangan Akademik
* **Program Studi:** Pendidikan Teknologi Informasi
* **Fakultas:** Fakultas Keguruan Ilmu Pendidikan
* **Perguruan Tinggi:** Universitas Muhammadiyah Tasikmalaya

---
*Dibuat dengan dedikasi dan nalar kritis di Tasikmalaya.*
![Lentera Ilmu Banner](https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1200&q=400)

**Lentera Ilmu** adalah sebuah platform Content Management System (CMS) khusus blog edukasi dan literasi yang dibangun menggunakan **Laravel 12**, **Breeze**, dan **Tailwind CSS**. Proyek ini dikembangkan sebagai syarat pemenuhan nilai **Ujian Akhir Semester (UAS)** mata kuliah Pemograman Internet.

Berbeda dengan blog pada umumnya, Lentera Ilmu dirancang dengan estetika "Academic Paper" yang mengutamakan kenyamanan membaca dan penyampaian informasi yang efisien.

---

## ✨ Fitur Unggulan & Keunikan (Project Uniqueness)

Proyek ini memiliki keunggulan teknis dan fitur unik yang memberikan nilai tambah:

### 1. ⏱️ Smart Reading Time Calculator
Sistem secara otomatis menghitung estimasi waktu baca untuk setiap artikel. Fitur ini menggunakan logika *Accessor* pada Model Laravel yang menghitung jumlah kata dan membaginya dengan rata-rata kecepatan baca manusia (200 kata/menit).

### 2. 💡 Key Takeaways (Ringkasan Inti)
Setiap artikel memiliki fitur "Inti Sari" di bagian awal. Hal ini membantu pembaca yang memiliki waktu terbatas untuk mendapatkan poin-poin utama artikel tanpa harus membaca keseluruhan teks.

### 3. 🎨 Academic Paper Theme
Visual dikustomisasi secara mendalam melalui `tailwind.config.js` dengan palet warna:
* **Emerald Green:** Memberikan kesan intelektual dan identitas akademis.
* **Paper Beige:** Warna latar belakang kuning gading (kertas tua) yang dirancang khusus agar mata pembaca tidak cepat lelah saat membaca teks panjang.
* **Merriweather Font:** Penggunaan tipografi *Serif* untuk isi artikel guna meningkatkan keterbacaan (*readability*).

### 4. 🛠️ Full Admin Management (CRUD)
Manajemen artikel yang lengkap melalui dashboard admin, mulai dari pembuatan artikel dengan slug otomatis, pengeditan data, hingga penghapusan artikel dengan sistem keamanan *middleware* dari Laravel Breeze.

---

## 🛠️ Stack Teknologi

* **Framework:** Laravel 12.x
* **Authentication:** Laravel Breeze (Blade & Alpine.js)
* **Styling:** Tailwind CSS v3.4
* **Typography:** Tailwind Typography Plugin (@tailwindcss/typography)
* **Database:** MySQL

---

## 🚀 Panduan Instalasi (Langkah demi Langkah)

Pastikan Anda menggunakan **Laragon** atau stack server lokal lainnya.

### 1. Persiapan Awal
```bash
# Clone repository
git clone [https://github.com/username/lentera-ilmu.git](https://github.com/username/lentera-ilmu.git)

# Masuk ke direktori
cd lentera-ilmu

# Install dependencies
composer install
npm install
