@extends('Layout.app')

@section('content')
    <div class="mx-auto md:w-[90%] w-full">
        <form action="{{ route('ac.update', $ac->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="bg-white overflow-hidden rounded-xl shadow-sm  transition-shadow border border-gray-100 ">

                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-5">
                    <h1 class="text-2xl font-bold text-white text-center">📦 {{ $ac->nama_barang }}</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📦 Nama Barang</label>
                        <input type="text" name="nama_barang" required value="{{ $ac->nama_barang }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🛒 Jumlah Barang</label>
                        <input type="number" name="satuan" required value="{{ $ac->satuan }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">💳 Harga Satuan</label>
                        <input type="number" name="harga_satuan" required value="{{ number_format($ac->harga_satuan, '0', ',', '') }}" min="1"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">💰 Jumlah Harga</label>
                        <input type="number" name="jumlah_harga" required value="{{ number_format($ac->jumlah_harga, '0', ',', '') }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🗺 Lokasi</label>
                        <input type="text" name="lokasi" required value="{{ $ac->lokasi }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    
                </div>

                <div class="flex gap-x-3 justify-center pt-5 pb-10">
                    <button type="submit"
                    class="font-semibold py-1 px-5 border bg-gradient-to-r from-green-500 to-green-600 rounded-full text-white">Simpan</button>
                    
                    <a href="{{ route('material.index') }}"
                     class="font-semibold py-1 px-5 border bg-gradient-to-r from-red-500 to-red-600 rounded-full text-white">Batalkan</a>
                </div>
            </div>
        </form>
    </div>
     
@endsection