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
                <h1 class="text-3xl font-bold text-gray-800">Material Service</h1>
                <a href="{{ route('material.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full shadow transition duration-300">
                    Import
                </a>
            </div>
        </div>
        
        <!-- cards --> 
        <div class="space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                @forelse ($materials as $material)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">
                        
                        <div class="bg-slate-900 p-5 flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m-4 6h4" />
                                </svg>
                                <h2 class="font-bold text-white tracking-wide uppercase text-sm">{{ $material->nama_barang }}</h2>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-lg bg-green-50 text-green-700 text-sm font-bold border border-green-100">
                                            {{ $material->jumlah_barang }} Unit
                                        </span>
                        </div>

                        <div class="p-6 flex-grow">
                            <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-50">
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase mb-1 italic">Person In Charge</p>
                                    <p class="text-sm font-semibold text-gray-700">{{ $material->nama_pic }}</p>
                                    <p class="text-xs text-gray-500">{{ $material->pic_telepon }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase mb-1 italic">Jadwal Visit</p>
                                    <div class="flex items-center gap-1 text-blue-600 font-bold text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $material->jadwal_visit->format('d M Y') }}
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                                <p class="text-[10px] font-bold text-gray-400 uppercase mb-1">Lokasi Project</p>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    Jl. Mangga Besar Raya No. 90 B Kel. Mangga Besar. Kec. Taman Sari 11180
                                </p>
                            </div>
                        </div>

                        @if (Auth::user()->role_id === '2')
                            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex gap-3 justify-end">
                                <a href="{{ route('material.edit', $material->id) }}" class="text-yellow-600 hover:text-white hover:bg-yellow-500 border border-yellow-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                    Edit
                                </a>

                                <form action="{{ route('material.destroy', $material->id) }}" method="POST" class="flex-1 md:flex-none">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:text-white hover:bg-red-500 border border-red-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex gap-3 justify-end">
                                @if ($material->status === 'null')
                                <form action="{{ route('material.status', $material->id) }}" method="POST" class="flex gap-x-2">
                                    @csrf
                                    @method('PUT')
    
                                    <button type="submit" name="status" value="selesai" class="text-green-600 hover:text-white hover:bg-green-500 border border-green-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                        Selesai
                                    </button>
                                    
                                    <button type="submit" name="status" value="tidak selesai" class="text-red-600 hover:text-white hover:bg-red-500 border border-red-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                        Tidak Selesai
                                    </button>
                                </form>
                                @elseif ($material->status === 'selesai')
                                <a class="text-white bg-green-500 border border-green-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                    Selesai
                                </a>
                                
                                @elseif ($material->status === 'tidak selesai')
                                <a class="text-white bg-red-500 border border-red-500 font-medium px-4 py-1.5 rounded-lg transition-colors text-sm">
                                    Tidak Selesai
                                </a>
                                @endif
                            </div>
                        @endif
                        
                    </div>
                @empty
                    <div class="col-span-full py-12 flex flex-col items-center justify-center bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200">
                        <p class="text-gray-500 font-medium">Belum ada data. Silahkan upload file excel terlebih dahulu.</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
@endsection