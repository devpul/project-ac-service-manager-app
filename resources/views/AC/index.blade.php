@extends('Layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">

        <div class="flex flex-col justify-between items-start md:items-center gap-4 my-2 w-full mx-auto">
            
            {{-- Tombol Kembali (Style Baru: Minimalis & Pakai Ikon) --}}
            <a href="{{ route('dashboard.index') }}" 
               class="group inline-flex w-full items-center gap-x-2 text-gray-500 hover:text-blue-600 transition-colors duration-200 font-medium text-sm">
                {{-- Ikon Panah Kiri SVG --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class=" w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Dashboard
            </a>

            {{-- Judul Halaman --}}
            <div class="flex justify-between w-full">
                <h1 class="text-3xl font-bold text-gray-800">Jenis & Tipe AC</h1>
                <a href="{{ route('ac.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full shadow transition duration-300">
                    Import
                </a>
            </div>
        </div>

        {{-- cards --}}
        <div class="space-y-8 flex-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @forelse ($acs as $ac)
                    <div class="bg-white shadow border border-gray-200 overflow-hidden rounded-2xl">

                        <div class="flex p-4 bg-gradient-to-r from-cyan-500 to-cyan-600">
                            <span class="font-bold text-white text-xl">
                                📦 {{ $ac->nama_barang }}
                            </span>
                        </div>

                        <div class="grid grid-cols-2 p-5 border-b border-gray-200">
                            <div class="space-y-2">
                                <span class="block text-sm text-gray-500 font-semibold">HARGA SATUAN</span>
                                <span class="font-medium">💳 Rp {{ number_format($ac->harga_satuan, 2, ',', '.') }}</span>
                            </div>
                            <div class="space-y-2">
                                <span class="block text-sm text-gray-500 font-semibold">SATUAN</span>
                                <span class="font-semibold">🗳 {{ $ac->satuan }}</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2 p-5 border-b border-gray-200">
                            <span class="block text-sm font-semibold text-gray-500">TOTAL HARGA</span>
                            <span class="block text-md font-semibold">💰 Rp {{ number_format($ac->jumlah_harga, 2, ',', '.') }}</span>
                        </div>
                        <div class="flex flex-col gap-y-2 px-5 pt-5">
                            <span class="block text-sm font-semibold text-gray-500">LOKASI</span>
                            <span class="block italic text-md text-gray-500 bg-gray-50 p-2 mb-5 rounded-xl">🗺 {{ $ac->lokasi }}</span>
                        </div>

                        <div class="flex justify-end p-5 gap-x-3 bg-gray-100">
                            <a href="{{ route('ac.edit', $ac->id) }}" class="text-yellow-600 hover:text-white hover:bg-yellow-500 border border-yellow-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                Edit
                            </a>

                            <form action="{{ route('ac.destroy', $ac->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data ?')"
                               class="text-red-600 hover:text-white hover:bg-red-500 border border-red-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                @empty
                    
                @endforelse
                
            </div>
        </div>

    </div>
@endsection