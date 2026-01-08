@extends('Layout.app')

@section('content')
    <div class="mx-auto md:w-[90%] w-full">
        <form action="{{ route('toko.update', $toko->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="bg-white overflow-hidden rounded-xl shadow-sm  transition-shadow border border-gray-100 ">

                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-5">
                    <h1 class="text-2xl font-bold text-white text-center">📍 {{ $toko->site . ' - ' . $toko->site_descr }}</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📍 Site</label>
                        <input type="text" name="site" required value="{{ $toko->site }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🔗 Site Description</label>
                        <input type="text" name="site_descr" required value="{{ $toko->site_descr }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🏬 store_type</label>
                        <input type="text" name="store_type" required value="{{ $toko->store_type}}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📅 go_date</label>
                        <input type="date" name="go_date" required value="{{ $toko->go_date }}"
                        class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                    </div>

                    <div class="space-y-5">
                        <span class="text-gray-500 font-semibold">
                            🗺 LOKASI
                        </span>
                        <div class="space-y-1">
                            <label class="block font-semibold text-sm">Province</label>
                            <input type="text" name="province" required value="{{ $toko->province }}"
                            class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                        </div>
                        <div class="space-y-1">
                            <label class="block font-semibold text-sm">City</label>
                            <input type="text" name="city" required value="{{ $toko->city }}"
                            class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                        </div>
                        <div class="space-y-1">
                            <label class="block font-semibold text-sm">District</label>
                            <input type="text" name="district" required value="{{ $toko->district }}"
                            class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                        </div>
                        <div class="space-y-1">
                            <label class="block font-semibold text-sm">Address</label>
                            <input type="text" name="address" required value="{{ $toko->address }}"
                            class="w-full outline-none px-2 py-1 focus:border-blue-200 border rounded">
                        </div>
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