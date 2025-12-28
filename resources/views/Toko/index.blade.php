@extends('layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">
        <h1 class="text-center text-bold text-2xl">Daftar Toko</h1>

        <div class="flex justify-start">
            <a href="{{ route('dashboard.index') }}"
            class="bg-red-500 font-semibold text-white px-3 py-1">Kembali</a>
        </div>

        <div class="flex justify-center">
            <form class="flex justify-center items-center" 
            action="{{ route('toko.import_excel') }}" 
            method="POST" 
            enctype="multipart/form-data">
                @csrf   
                <input type="file" name="file" required class=" py-2">
                <button type="submit" class="bg-green-500 py-1 px-3 text-white font-semibold">
                    Import
                </button>
            </form>
        </div>

        <div class="flex flex-col gap-y-10">
            
                @forelse ($tokos as $toko)
                    <div class="flex flex-col gap-y-2 shadow p-10 rounded-xl bg-blue-400 text-white">
                        <h2 class="text-xl font-bold mb-5">📍 {{ $toko->site . ' - ' . $toko->site_descr }}</h2>
                        <h2 class="text-lg font-semibold">⚙ Store Type: {{ $toko->store_type }}</h2>
                        <h2 class="text-lg">⚙ Go-date: {{  $toko->go_date }}</h2>
                        <h2 class="text-lg">⚙ province: {{  $toko->province }}</h2>
                        <h2 class="text-lg">⚙ city: {{  $toko->city }}</h2>
                        <h2 class="text-lg">🏘 {{  $toko->district }}</h2>
                        <h2 class="text-lg text-justify">🗺 {{  $toko->address }}</h2>
                            
                            <div class="flex justify-center gap-x-3 items-center mt-5">
                                <a type="submit" href="{{ route('toko.edit',  $toko->id ) }}"
                                class="bg-yellow-500 text-black px-3 py-1 rounded-lg font-semibold">Edit</a>
                                <form action="{{ route('toko.destroy', $toko->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Kamu yakin menghapus toko ini?')"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg font-semibold">Hapus</button>
                                </form>
                            </div>
                    </div>
                @empty
                    <h2>Tidak ditemukan</h2>
                @endforelse
        </div>

        <div class="flex gap-x-5 justify-center">
            <a href="{{ route('toko.create')  }}"
            class="bg-blue-500 py-1 px-3 text-white font-semibold">Tambah Toko</a>
        </div>
    </div>
    
@endsection
