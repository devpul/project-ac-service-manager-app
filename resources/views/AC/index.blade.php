@extends('Layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">

        <div class="flex flex-col md:flex-row justify-between mt-5">
            <a href="{{ route('dashboard.index') }}" 
            class="group hover:text-blue-400 flex items-center text-gray-500 font-semibold text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="group-hover:-translate-x-1 size-6 transition duration-300 text-gray-400 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Dashboard
            </a>
            <h1 class="font-bold text-3xl text-slate-700">Jenis & Tipe AC</h1>

            <div class="hidden md:block w-[150px]"></div> 
        </div>

        <div class="w-full max-w-md mx-auto">
            <form action="" method="POST" enctype="multipart/form-data"
            class="flex items-center p-5 rounded-xl bg-white border border-gray-200 shadow-md">
                <div class="flex-1 ">   
                    <label class="block mb-1 text-sm font-medium text-gray-700">Upload File Excel</label>
                    <input type="file" name="file" required
                    class="file:rounded-full file:bg-blue-50 file:text-blue-600
                    file:font-semibold file:text-sm file:py-2 file:px-3 file:border-0
                    w-full file:border">
                </div>  
                <button type="submit" class="px-3 py-2 border bg-green-500 text-white text-sm font-bold rounded-full">
                    Import
                </button>
            </form>
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
                                <span class="block text-sm text-gray-500">HARGA SATUAN</span>
                                <span class="font-semibold">💳 Rp {{ number_format($ac->harga_satuan, 2, ',', '.') }}</span>
                            </div>
                            <div class="space-y-2">
                                <span class="block text-sm text-gray-500">SATUAN</span>
                                <span class="font-semibold">🗳 {{ $ac->satuan }}</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2 p-5 border-b border-gray-200">
                            <span class="block text-sm font-semibold text-gray-400">TOTAL HARGA</span>
                            <span class="block text-md font-semibold">💰 Rp {{ number_format($ac->jumlah_harga, 2, ',', '.') }}</span>
                        </div>
                        <div class="flex flex-col gap-y-2 px-5 pt-5">
                            <span class="block text-sm font-semibold text-gray-400">LOKASI</span>
                            <span class="block italic text-sm text-gray-500 bg-gray-50 p-2">🗺 {{ $ac->lokasi }}</span>
                        </div>

                        <div class="flex justify-end p-5 gap-x-3 bg-gray-100">
                            <a href="" class="border-2 border-yellow-500 text-yellow-500 font-semibold text-sm px-3 py-1 rounded"> 
                                Edit
                            </a>

                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" 
                                class="border-2 border-red-500 text-red-500 font-semibold text-sm px-3 py-1 rounded">Hapus</button>
                            </form>
                        </div>
                    </div>
                @empty
                    
                @endforelse
                
            </div>
        </div>

    </div>
@endsection