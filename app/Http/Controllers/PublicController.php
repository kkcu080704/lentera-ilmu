<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Menampilkan Halaman Depan (Landing Page)
    public function index()
    {
        // Ambil semua postingan, urutkan dari yang terbaru
        $posts = Post::latest()->get();

        return view('welcome', compact('posts'));
    }

    // Menampilkan Halaman Baca (Detail)
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}