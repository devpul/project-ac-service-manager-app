@extends('Layout.app')

@section('content')
    <div class="mx-auto md:w-[90%] w-full">
        <form action="{{ route('material.update', $material->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="bg-white overflow-hidden rounded-xl shadow-sm  transition-shadow border border-gray-100 ">

                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-5">
                    <h1 class="text-2xl font-bold text-white text-center">🏚 {{ $material->nama_toko }}</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🏚 Nama Toko</label>
                        <input type="text" name="nama_toko" required value="{{ $material->nama_toko }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📦 Nama Barang</label>
                        <input type="text" name="nama_barang" required value="{{ $material->nama_barang }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🛒 Jumlah Barang</label>
                        <input type="text" name="jumlah_barang" required value="{{ $material->jumlah_barang }}" min="1"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">👨‍💼 Nama PIC</label>
                        <input type="text" name="nama_pic" required value="{{ $material->nama_pic }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📞 No. Telepon</label>
                        <input type="text" name="pic_telepon" required value="{{ $material->pic_telepon }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📅 Jadwal Visit</label>
                        <input type="date" name="jadwal_visit" required value="{{ $material->jadwal_visit }}"
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