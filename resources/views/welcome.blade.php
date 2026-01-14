<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lentera Ilmu - Literasi & Edukasi</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Merriweather:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="bg-library-paper font-sans text-library-ink antialiased">

    <nav class="bg-white/80 backdrop-blur-md border-b border-stone-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <span class="text-3xl">🕯️</span>
                    <div class="leading-tight">
                        <h1 class="font-serif font-bold text-2xl text-library-primary tracking-tight">Lentera<span class="text-library-gold">Ilmu</span></h1>
                        <p class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Jendela Literasi</p>
                    </div>
                </div>

                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-library-primary hover:text-library-gold transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-library-primary transition">Masuk</a>
                        <a href="{{ route('register') }}" class="bg-library-primary text-white px-5 py-2.5 rounded-lg hover:bg-emerald-800 transition shadow-sm">Gabung</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <header class="py-20 text-center px-4">
        <h2 class="font-serif text-5xl md:text-6xl font-black text-library-ink mb-6 leading-tight">
            Menyalakan <span class="text-library-primary underline decoration-library-gold decoration-4 underline-offset-4">Nalar</span>,<br>
            Mencerdaskan Bangsa.
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto font-serif italic">
            "Kumpulan artikel kurasi untuk Anda yang gemar berpikir mendalam."
        </p>
    </header>

    <main class="max-w-6xl mx-auto px-4 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            @foreach($posts as $post)
            <article class="bg-white border border-stone-200 rounded-xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition duration-300 group flex flex-col h-full">
                
                <div class="h-64 overflow-hidden relative bg-gray-100">
                    <img src="{{ $post->gambar }}" alt="{{ $post->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 filter sepia-[0.2]">
                    <span class="absolute top-4 left-4 bg-white/90 backdrop-blur text-library-primary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-stone-200">
                        {{ $post->kategori }}
                    </span>
                </div>

                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="font-serif text-2xl font-bold text-gray-800 mb-3 leading-snug group-hover:text-library-primary transition">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            {{ $post->judul }}
                        </a>
                    </h3>

                    <div class="flex items-center gap-4 text-xs text-gray-500 font-bold uppercase tracking-wider mb-4 border-b border-stone-100 pb-4">
                        <span class="flex items-center gap-1">
                            👤 {{ $post->penulis }}
                        </span>
                        <span class="text-stone-300">•</span>
                        <span class="flex items-center gap-1 text-library-gold">
                            ⏱️ {{ $post->reading_time }} Menit Baca
                        </span>
                    </div>

                    <div class="bg-stone-50 p-4 rounded-lg border-l-4 border-library-primary mb-6">
                        <p class="text-gray-600 text-sm font-serif italic leading-relaxed">
                            "{{ Str::limit($post->ringkasan, 120) }}"
                        </p>
                    </div>

                    <div class="mt-auto">
                        <a href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center text-library-primary font-bold hover:underline decoration-2 underline-offset-4">
                            Baca Selengkapnya <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </main>

    <footer class="bg-white border-t border-stone-200 py-10 text-center">
        <p class="text-gray-500 font-serif italic text-sm">© 2026 Lentera Ilmu. Membaca adalah melawan.</p>
    </footer>

</body>
</html>