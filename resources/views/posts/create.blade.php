<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tulis Artikel Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-sm sm:rounded-lg border border-stone-200">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block font-bold text-sm text-gray-700 uppercase">Judul Artikel</label>
                            <input type="text" name="judul" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-emerald-500 focus:ring-emerald-500" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-sm text-gray-700 uppercase">Kategori</label>
                                <input type="text" name="kategori" placeholder="Contoh: Sains, Sastra" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-emerald-500" required>
                            </div>
                            <div>
                                <label class="block font-bold text-sm text-gray-700 uppercase">Nama Penulis</label>
                                <input type="text" name="penulis" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-emerald-500" required>
                            </div>
                        </div>
                        <div>
                            <label class="block font-bold text-sm text-gray-700 uppercase">Ringkasan (Inti Sari)</label>
                            <textarea name="ringkasan" rows="2" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-emerald-500" required></textarea>
                        </div>
                        <div>
                            <label class="block font-bold text-sm text-gray-700 uppercase">Isi Artikel</label>
                            <textarea name="isi" rows="10" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-emerald-500" required></textarea>
                        </div>
                        <div class="flex justify-end gap-4">
                            <a href="{{ route('dashboard') }}" class="text-gray-500 font-bold px-4 py-2 hover:underline">Batal</a>
                            <button type="submit" class="bg-emerald-600 text-white font-bold px-6 py-2 rounded-lg hover:bg-emerald-700 transition shadow-md">
                                Terbitkan Artikel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>