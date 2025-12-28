@extends('Layout.app')

@section('content')
    
    {{-- tombol sidebar --}}
    <aside id="openSidebar" class="absolute top-0 right-0 z-5 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </aside>

    {{-- sidebar --}}
    <div id="sidebar" class="min-h-screen absolute top-0 right-0 bg-gray-50 w-[200px] transition">
        <div id="closeSidebar" class="flex justify-end transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
        
        <ul class="p-3 space-y-4">
            @if (Auth::user()->role_id != 3)
                <li class="hover:bg-blue-500 hover:text-white transition font-semibold py-1 px-2">
                    <a href="{{ route('gaji.index') }}" class="flex items-center gap-x-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <div>Manajemen User</div>
                    </a>
                </li>
            @endif
            <li class="hover:bg-blue-500 hover:text-white transition font-semibold py-1 px-2">
                <a href="{{ route('detail.index') }}" class="flex items-center gap-x-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div>Detail Akun</div>
                </a>
            </li>
        </ul>
    </div>

    {{-- logo & cards --}}
    <div class="flex flex-col justify-center items-center gap-y-10">
        <img src="{{ asset('assets/logo-pt-higo.png') }}"
        width="150px">
        
        <div class="grid grid-cols-2 gap-5 p-2">
            <a href="{{ route('kalender.view') }}" 
            class="bg-cyan-400 hover:bg-cyan-500 text-center text-white p-10 rounded-xl text-xl font-bold">⌚<br> Jadwal & Kegiatan</a>
            <a href="{{ route('toko.index') }}"
            class="bg-cyan-400 hover:bg-cyan-500 text-center p-10 text-white rounded-xl text-xl font-bold">🏬<br> Daftar Toko</a>
            <a href="{{ route('ac.index') }}" 
            class="bg-cyan-400 hover:bg-cyan-500 text-center p-10 text-white rounded-xl text-xl font-bold">🎨<br> Jenis & Tipe AC</a>
            <a class="bg-cyan-400 hover:bg-cyan-500 text-center p-10 text-white rounded-xl text-xl font-bold">🧰<br>Material Service</a>
        </div>
    </div>

    {{-- script toggle sidebar --}}
    <script> 
        document.addEventListener('DOMContentLoaded', function() {
            const openSidebar = document.getElementById('openSidebar');
            const closeSidebar = document.getElementById('closeSidebar');
            const sidebar = document.getElementById('sidebar');

            // sidebar.classList.add('translate-x-full', 'opacity-0');           

            openSidebar.addEventListener('click', (e) => {
                e.preventDefault();
                sidebar.classList.remove('translate-x-full', 'opacity-0');
                sidebar.classList.add('translate-x-0', 'opacity-100');
                openSidebar.classList.add('hidden');
            });

            closeSidebar.addEventListener('click', (e) => {
                e.preventDefault();
                sidebar.classList.add('translate-x-full', 'opacity-0');
                sidebar.classList.remove('translate-x-0', 'opacity-100');
                openSidebar.classList.remove('hidden');
            });
        }) 
    </script>
@endsection