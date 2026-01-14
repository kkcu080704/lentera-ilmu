<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-serif font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Manajemen Artikel - Lentera Ilmu') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="inline-flex items-center bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-sm transition-all active:scale-95">
                <span class="mr-2">➕</span> Tambah Artikel
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 font-medium rounded-r-lg shadow-sm">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-stone-200">
                <div class="p-8">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-stone-50 border-b-2 border-stone-200">
                                    <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-stone-500">Judul Artikel</th>
                                    <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-stone-500">Kategori</th>
                                    <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-stone-500">Penulis</th>
                                    <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-stone-500 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-100">
                                @forelse($posts as $post)
                                    <tr class="hover:bg-stone-50/50 transition-colors">
                                        <td class="px-6 py-5">
                                            <div class="font-serif font-bold text-lg text-gray-900 leading-tight">
                                                {{ $post->judul }}
                                            </div>
                                            <div class="text-xs text-gray-400 mt-1 uppercase tracking-tighter">
                                                Slug: {{ $post->slug }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <span class="inline-block bg-emerald-50 text-emerald-700 text-[10px] font-black px-2.5 py-1 rounded-md border border-emerald-100 uppercase">
                                                {{ $post->kategori }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-5 text-sm font-medium text-gray-600">
                                            {{ $post->penulis }}
                                        </td>
                                        <td class="px-6 py-5 text-center">
                                            <div class="flex justify-center items-center gap-4">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-600 hover:text-blue-800 font-bold text-sm flex items-center gap-1 transition">
                                                    ✏️ <span>Edit</span>
                                                </a>

                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus artikel ini? Tindakan ini tidak bisa dibatalkan.')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800 font-bold text-sm flex items-center gap-1 transition">
                                                        🗑️ <span>Hapus</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-20 text-center">
                                            <div class="text-stone-300 text-5xl mb-4">📖</div>
                                            <p class="text-stone-500 font-serif italic text-lg">Belum ada artikel yang diterbitkan.</p>
                                            <a href="{{ route('posts.create') }}" class="text-emerald-600 font-bold hover:underline mt-2 inline-block">Mulai tulis artikel pertama Anda &rarr;</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-xs text-stone-400 uppercase tracking-[0.2em] font-bold">Lentera Ilmu Management System v1.0</p>
            </div>
        </div>
    </div>
</x-app-layout>