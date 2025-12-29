@extends('Layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">

        
        <div class="flex flex-col md:flex-row jusitfy-between items-start md:items-center gap-4 my-2">
            <a href="{{ route('dashboard.index') }}" 
               class="group inline-flex items-center gap-x-2 text-gray-500 hover:text-blue-600 transition-colors duration-200 font-medium text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Dashboard
            </a>

            <h1 class="text-3xl font-bold text-gray-800">Material Service</h1>

            <div class="hidden md:block w-[150px]"></div>
        </div>

        <div class="w-full max-w-md mx-auto">
            <form action="" method="POST" enctype="multipart/form-data"
                class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-md border border-gray-200">
                @csrf
                <div class="">
                    <label class="text-gray-700 mb-1 font-medium text-sm">Upload File Excel</label>
                    <input type="file" name="file" required
                    class="file:bg-blue-100 
                    file:text-blue-700 file:rounded-full
                    file:border-0 file:px-4 file:py-2 
                    file:text-sm file:font-semibold
                    file:mr-4
                    text-sm text-slate-500 w-full">
                </div>

                <button type="submit" class="bg-green-600 hover:bg-green-700 
                text-white font-bold py-2 px-4 rounded-full shadow transition duration-300">Import</button>
            </form>
        </div>

        <!-- cards --> 
        <div class="space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @forelse ($materials as $material)
                    <div class="bg-white flex flex-col overflow-hidden rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 ">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4">
                        <h2 class="font-bold  text-white text-xl">🏚 {{ $material->nama_toko }}</h2>
                    </div>
                
                    <div class="p-5 space-y-3 bg-gray-50 border-b border-gray-300">
                        <span class="block text-gray-400 font-semibold text-md">DETAIL</span>
                        <span class="block text-md">📦 {{ $material->nama_barang }}</span>
                        <span class="block text-md">🛒 {{ $material->jumlah_barang }}</span>
                        <span class="block text-md">👨‍💼 {{ $material->nama_pic }} (PIC)</span>
                        <span class="block text-md">📞 {{ $material->pic_telepon }}</span>
                        <span class="block text-md">📅 {{ $material->jadwal_visit->format('d M Y') }}</span>
                    </div>
                    <div class="p-5 space-y-3 bg-gray-50">
                        <span class="block text-gray-400 font-semibold text-sm">LOKASI</span>
                        <span class="block text-sm text-gray-500 italic">🗺 Jl. Mangga Besar Raya No. 90 B Kel. Mangga Besar. Kec. Taman Sari 11180</span>
                    </div>

                    <div class="p-5 bg-gray-50 border border-gray-200">
                        <div class="flex gap-x-5 justify-end">
                            <a href="{{ route('material.edit', $material->id) }}" class="py-1 px-3 text-sm font-semibold text-yellow-500 border border-yellow-500 rounded-lg">
                                Edit
                            </a>

                            <form action="{{ route('material.destroy', $material->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="py-1 px-3 text-sm font-semibold text-red-500 border border-red-500 rounded-lg">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                    </div>
                @empty
                    <span class="text-center font-semibold">Silahkan upload file excel terlebih dahulu.</span>
                @endforelse
                
            </div>
        </div>

    </div>
@endsection