<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Tampilkan Form Edit
public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

// Proses Update Data
public function update(Request $request, Post $post)
{
    $request->validate([
        'judul' => 'required',
        'kategori' => 'required',
        'penulis' => 'required',
        'ringkasan' => 'required',
        'isi' => 'required',
    ]);

    $post->update([
        'judul' => $request->judul,
        'slug' => Str::slug($request->judul),
        'kategori' => $request->kategori,
        'penulis' => $request->penulis,
        'ringkasan' => $request->ringkasan,
        'isi' => $request->isi,
    ]);

    return redirect()->route('dashboard')->with('success', 'Artikel berhasil diperbarui!');
}

// Proses Hapus Artikel
public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('dashboard')->with('success', 'Artikel telah dihapus.');
}
    // Tampilkan Form Tambah
    public function create()
    {
        return view('posts.create');
    }

    // Simpan Artikel ke Database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'ringkasan' => 'required',
            'isi' => 'required',
        ]);

        Post::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul), // Otomatis buat slug dari judul
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'gambar' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80', // Gambar default sementara
        ]);

        return redirect()->route('dashboard')->with('success', 'Artikel berhasil diterbitkan!');
    }
}