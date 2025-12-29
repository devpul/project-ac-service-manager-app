@extends('Layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 my-2">
            <a href="{{ route('dashboard.index') }}" 
               class="group flex items-center gap-x-2 text-gray-500 hover:text-blue-600 transition-colors duration-200 font-medium text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Dashboard
            </a>

            <h1 class="text-3xl font-bold text-gray-800">Material Service</h1>

            <div class="bg-yellow-500 md:block w-[150px]"></div> 
        </div>

        <div class="w-full max-w-md mx-auto mb-10">
            <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-white border-2 border-dashed border-gray-300 rounded-2xl p-8 flex flex-col items-center justify-center hover:border-blue-400 transition-colors">
                        <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        
                        <h3 class="text-sm font-bold text-gray-700">Upload Data Material</h3>
                        <p class="text-xs text-gray-400 mt-1 mb-4 text-center">Klik atau drag file Excel ke sini</p>
                        
                        <input type="file" name="file" required
                            class="absolute inset-0 opacity-0 cursor-pointer">
                        
                        <button type="submit" class="relative z-10 w-full bg-slate-900 hover:bg-black text-white font-bold py-2.5 rounded-xl transition-all shadow-md active:scale-[0.98]">
                            Proses Import
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <!-- cards --> 
        <div class="space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                @forelse ($materials as $material)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">
                        
                        <div class="bg-slate-900 p-4 flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m-4 6h4" />
                                </svg>
                                <h2 class="font-bold text-white tracking-wide uppercase text-sm">{{ $material->nama_toko }}</h2>
                            </div>
                            <span class="bg-blue-500/20 text-blue-300 text-[10px] font-bold px-2 py-1 rounded-full border border-blue-500/30">
                                MATERIAL
                            </span>
                        </div>

                        <div class="p-6 flex-grow">
                            <div class="mb-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-xs font-bold text-gray-400 uppercase mb-1">Nama Barang</p>
                                        <p class="text-lg font-bold text-gray-800">{{ $material->nama_barang }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs font-bold text-gray-400 uppercase mb-1">Stok</p>
                                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-green-50 text-green-700 text-sm font-bold border border-green-100">
                                            {{ $material->jumlah_barang }} Unit
                                        </span>
                                    </div>
                                </div>
                            </div>

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

                        <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex gap-3 justify-end">
                            <a href="{{ route('material.edit', $material->id) }}" class="flex-1 md:flex-none text-center px-4 py-2 text-sm font-bold text-amber-600 bg-amber-50 hover:bg-amber-100 rounded-xl transition-colors">
                                Edit Data
                            </a>

                            <form action="{{ route('material.destroy', $material->id) }}" method="POST" class="flex-1 md:flex-none">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="w-full px-4 py-2 text-sm font-bold text-red-600 bg-red-50 hover:bg-red-100 rounded-xl transition-colors">
                                    Hapus
                                </button>
                            </form>
                        </div>
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