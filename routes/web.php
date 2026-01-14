<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PostController; // <--- Pastikan ini ada nanti
use App\Models\Post; // <--- INI PENYEBAB ERRORNYA, WAJIB ADA
use Illuminate\Support\Facades\Route;

// --- RUTE PUBLIK ---
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/baca/{slug}', [PublicController::class, 'show'])->name('posts.show');

// --- RUTE DASHBOARD ---
Route::get('/dashboard', function () {
    $posts = Post::all(); 
    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

// --- RUTE CRUD ARTIKEL ---
Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    
    // Rute Profile Bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';