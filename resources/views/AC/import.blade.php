@extends('Layout.app')

@section('content')
    <div class="w-full max-w-md mx-auto mb-10">
         <a href="{{ route('ac.index') }}" 
               class="group inline-flex w-full items-center gap-x-2 text-gray-500 hover:text-blue-600 transition-colors duration-200 font-medium text-sm">
                {{-- Ikon Panah Kiri SVG --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class=" w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Jenis dan Tipe AC
            </a>

        <form action="{{ route('ac.import') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    
                <div class="relative bg-white border-2 border-dashed border-gray-300 rounded-2xl p-8 flex flex-col items-center justify-center hover:border-blue-400 transition-colors">
                    <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                    </div>
                        
                    <h3 class="text-sm font-bold text-gray-700">Upload Data Jenis & Tipe AC</h3>
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
@endsection


