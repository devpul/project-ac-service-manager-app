@extends('layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">

        {{-- BAGIAN 1: HEADER & NAVIGASI (REVISI) --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 my-2">
            
            {{-- Tombol Kembali (Style Baru: Minimalis & Pakai Ikon) --}}
            <a href="{{ route('dashboard.index') }}" 
               class="group inline-flex items-center gap-x-2 text-gray-500 hover:text-blue-600 transition-colors duration-200 font-medium text-sm">
                {{-- Ikon Panah Kiri SVG --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Dashboard
            </a>

            {{-- Judul Halaman --}}
            <h1 class="text-3xl font-bold text-gray-800">Daftar Toko</h1>
            
            {{-- Spacer kosong agar judul terlihat di tengah (opsional, untuk layout 3 kolom) --}}
            <div class="hidden md:block w-[150px]"></div> 
        </div>
        

        <div class="w-full max-w-md mx-auto">
            <form action="{{ route('toko.import_excel') }}" method="POST" enctype="multipart/form-data" 
                class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-md border border-gray-200">
                @csrf
                
                <div class="flex-1">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Upload File Excel</label>
                    <input type="file" name="file" required 
                        class="w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100">
                </div>

                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-300">
                    Import
                </button>
            </form>
        </div>

        <div class="space-y-8">


    {{-- 2. Container Grid (Responsive: 1 kolom di HP, 2 di Tablet, 3 di Laptop) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        @forelse ($tokos as $toko)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                
                {{-- Header Kartu (Warna Biru) --}}
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4">
                    <h2 class="text-white font-bold text-lg flex items-start gap-2">
                        <span>📍</span> 
                        <span class="leading-tight">{{ $toko->site }} - {{ $toko->site_descr }}</span>
                    </h2>
                </div>

                {{-- Body Kartu --}}
                <div class="p-5 flex-1 space-y-4 text-sm text-gray-600">
                    
                    {{-- Baris Info Utama (Grid kecil di dalam kartu) --}}
                    <div class="grid grid-cols-2 gap-4 pb-4 border-b border-gray-100">
                        <div>
                            <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Tipe Toko</span>
                            <span class="font-medium text-gray-800 flex items-center gap-1">
                                ⚙ {{ $toko->store_type }}
                            </span>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Go-Date</span>
                            <span class="font-medium text-gray-800 flex items-center gap-1">
                                {{-- Format tanggal otomatis jika sudah pakai $casts di Model, kalau belum pakai format manual --}}
                                📅 {{ \Carbon\Carbon::parse($toko->go_date)->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    {{-- Info Lokasi --}}
                    <div class="space-y-1">
                        <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Lokasi</span>
                        <div class="flex items-start gap-2">
                            <span>🏙</span>
                            <span>{{ $toko->city }}, {{ $toko->province }}</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span>🏘</span>
                            <span>{{ $toko->district }}</span>
                        </div>
                        <div class="flex items-start gap-2 text-gray-500 italic mt-2 bg-gray-50 p-2 rounded">
                            <span class="shrink-0">🗺</span>
                            <span>{{ $toko->address }}</span>
                        </div>
                    </div>
                </div>

                {{-- Footer Kartu (Tombol Aksi) --}}
                <div class="bg-gray-50 p-4 border-t border-gray-100 flex justify-end gap-3">
                    <a href="{{ route('toko.edit', $toko->id) }}" 
                       class="text-yellow-600 hover:text-white hover:bg-yellow-500 border border-yellow-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                        Edit
                    </a>

                    <form action="{{ route('toko.destroy', $toko->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                onclick="return confirm('Kamu yakin menghapus toko {{ $toko->site }}?')"
                                class="text-red-600 hover:text-white hover:bg-red-500 border border-red-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                            Hapus
                        </button>
                    </form>
                </div>

            </div>
        @empty
            {{-- Empty State (Tampilan jika data kosong) --}}
            <div class="col-span-full flex flex-col items-center justify-center py-12 text-center text-gray-500">
                <div class="text-6xl mb-4">📂</div>
                <h3 class="text-xl font-semibold text-gray-700">Belum ada data toko</h3>
            </div>
        @endforelse
        
    </div>
</div>
    
@endsection
