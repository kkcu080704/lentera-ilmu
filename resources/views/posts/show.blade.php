<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->judul }} - Lentera Ilmu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Merriweather:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="bg-library-paper font-serif text-library-ink antialiased">

    <nav class="bg-white border-b border-stone-200 py-6">
        <div class="max-w-3xl mx-auto px-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-bold text-xl text-library-primary font-sans">🕯️ LenteraIlmu</a>
            <a href="{{ url('/') }}" class="text-sm font-sans font-semibold text-gray-500 hover:text-library-primary transition">&larr; KEMBALI</a>
        </div>
    </nav>

    <article class="max-w-3xl mx-auto px-4 py-16">
        <div class="text-center mb-10">
            <span class="bg-library-secondary text-library-primary px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">
                {{ $post->kategori }}
            </span>
            <h1 class="text-4xl md:text-5xl font-black mt-6 mb-4 leading-tight text-gray-900">
                {{ $post->judul }}
            </h1>
            <div class="text-sm text-gray-500 font-sans font-medium flex justify-center gap-4">
                <span>Oleh: <strong>{{ $post->penulis }}</strong></span>
                <span>•</span>
                <span class="text-library-gold uppercase">⏱️ {{ $post->reading_time }} Menit Baca</span>
            </div>
        </div>

        <div class="bg-emerald-50 border-l-4 border-library-primary p-8 mb-12 rounded-r-xl shadow-sm italic text-gray-700 leading-relaxed">
            <h4 class="font-sans not-italic font-bold text-library-primary text-xs uppercase tracking-widest mb-2">Inti Sari Artikel:</h4>
            "{{ $post->ringkasan }}"
        </div>

        @if($post->gambar)
            <div class="mb-12">
                <img src="{{ $post->gambar }}" class="w-full rounded-2xl shadow-lg border border-stone-200 filter sepia-[0.1]">
            </div>
        @endif

        <div class="prose prose-slate prose-lg max-w-none 
                    prose-headings:font-serif prose-headings:text-gray-900
                    prose-p:leading-loose prose-p:text-gray-700
                    first-letter:text-6xl first-letter:font-bold first-letter:text-library-primary 
                    first-letter:mr-3 first-letter:float-left">
            {!! $post->isi !!}
        </div>

        <div class="mt-20 pt-10 border-t border-stone-200 text-center">
            <p class="text-sm text-gray-400 font-sans italic mb-6">Terima kasih telah membaca. Mari terus menyalakan nalar.</p>
            <a href="{{ url('/') }}" class="bg-library-primary text-white px-8 py-3 rounded-full font-sans font-bold hover:bg-emerald-800 transition shadow-md">
                Baca Artikel Lainnya
            </a>
        </div>
    </article>

</body>
</html>