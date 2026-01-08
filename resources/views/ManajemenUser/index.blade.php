@extends('Layout.app')

@section('content')
    <div class="flex flex-col gap-y-10 mx-auto w-[90%]">

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
                <h1 class="text-3xl font-bold text-gray-800">Daftar Karyawan</h1>
                <a href="{{ route('karyawan.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full shadow transition duration-300">
                    Import
                </a>
            </div>
        </div>
       

        {{-- form import --}}
        <form action="{{ route('karyawan.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
        {{-- cards --}}
        <div class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-10">
                @forelse ($karyawans as $karyawan)
                    <div class="overflow-hidden flex flex-col bg-white rounded-xl shadow border border-gray-200">
                        <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 p-5 flex justify-between">
                            <span class="text-xl text-white font-bold">👨‍💼 {{ $karyawan->nama_karyawan }}</span>
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="text-black font-semibold bg-yellow-500 px-2 py-1 rounded">Edit</a>
                        </div>

                        <div class="grid grid-cols-2 p-5 border-b border-gray-200">
                            <div class="space-y-1">
                                <span class="block font-semibold text-sm text-gray-500">📅 TANGGAL</span>
                                <span class="block font-semibold text-sm text-justify"> {{ $karyawan->jadwal_karyawan->format('d M Y') }}</span>
                            </div>
                            <div class="space-y-1">
                                <span class="block font-semibold text-sm text-gray-500">⏲ JAM MULAI</span>
                                <span class="block font-semibold text-sm text-justify">{{ $karyawan->jadwal_karyawan->format('H.i') }} WIB</span>
                            </div>
                            
                        </div>

                        <div class="p-5 border-b border-gray-200 space-y-2">
                            <span class="block font-semibold text-sm text-gray-500">📝 TUGAS</span>
                            <span class="block  text-md italic text-justify">{{ $karyawan->tugas_karyawan }}</span>
                        </div>
                        
                        <div class="grid grid-cols-2 p-5 gap-x-3 items-center bg-gray-100">
                            <div class="">
                                @if ($karyawan->absen === 'HADIR')
                                    <span href=""
                                    class="block text-sm text-center font-semibold text-white bg-green-500 border rounded-full  py-2">
                                    {{ $karyawan->absen }}</span>
                                @elseif ($karyawan->absen === 'IZIN')
                                    <span href=""
                                    class="block text-sm text-center font-semibold text-white bg-yellow-500 border rounded-full  py-2">
                                    {{ $karyawan->absen }}</span>
                                @elseif ($karyawan->absen === 'SAKIT')
                                    <span href=""
                                    class="block text-sm text-center font-semibold text-white bg-orange-500 border rounded-full  py-2">
                                    {{ $karyawan->absen }}</span>
                                @else
                                    <span href=""
                                    class="block text-sm text-center font-semibold text-white bg-red-500 border rounded-full  py-2">
                                    {{ $karyawan->absen }}</span>
                                @endif
                                
                            </div>
                            <div class="">
                                <a href="{{ route('gaji.index') }}"
                                class="block text-sm underline cursor-pointer hover:bg-green-600 text-center font-semibold text-white bg-green-500 border rounded-full  py-2">
                                LIHAT GAJI</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div></div>
                @endforelse
            </div>
        </div>
    
    </div>
@endsection