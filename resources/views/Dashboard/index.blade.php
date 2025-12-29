@extends('Layout.app')

@section('content')
    <div class="relative min-h-screen w-full bg-gray-50">
        
        <button id="openSidebar" class="absolute top-5 right-5 z-40 p-2 bg-white rounded-full shadow-lg border border-gray-100 text-gray-600 hover:text-blue-600 transition-all active:scale-90">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div id="sidebarOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden transition-opacity"></div>

        <aside id="sidebar" class="fixed top-0 right-0 h-screen w-[260px] bg-white shadow-2xl z-50 transition-transform duration-300 translate-x-full">
            <div class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="font-bold text-gray-800 tracking-tight text-lg">Menu Navigasi</h3>
                    <button id="closeSidebar" class="p-1 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <nav>
                    <ul class="space-y-2">
                        @if (Auth::user()->role_id != 3)
                        <li>
                            <a href="{{ route('karyawan.index') }}" class="flex items-center gap-3 p-3 rounded-xl font-semibold text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all group">
                                <span class="p-2 bg-gray-50 group-hover:bg-blue-100 rounded-lg transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </span>
                                Manajemen User
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('detail.index') }}" class="flex items-center gap-3 p-3 rounded-xl font-semibold text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all group">
                                <span class="p-2 bg-gray-50 group-hover:bg-blue-100 rounded-lg transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </span>
                                Detail Akun
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div class="absolute bottom-5 w-full px-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 p-3 text-red-600 font-bold bg-red-50 hover:bg-red-100 rounded-xl transition-colors text-sm">
                        Keluar Sistem
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex flex-col justify-center items-center min-h-screen px-4 py-12">
            <div class="mb-12">
                <img src="{{ asset('assets/logo-pt-higo.png') }}" alt="Logo Higo" class="w-40 md:w-52 drop-shadow-sm">
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4 md:gap-8 w-full max-w-2xl">
                <a href="{{ route('kalender.view') }}" 
                class="group relative overflow-hidden bg-white p-6 md:p-10 rounded-3xl shadow-sm border border-gray-100 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-6xl text-blue-600">⌚</span>
                </div>
                <div class="relative z-10">
                    <div class="text-3xl mb-3">📅</div>
                    <h3 class="text-gray-800 font-extrabold text-sm md:text-lg leading-tight">Jadwal &<br>Kegiatan</h3>
                </div>
                </a>

                <a href="{{ route('toko.index') }}"
                class="group relative overflow-hidden bg-white p-6 md:p-10 rounded-3xl shadow-sm border border-gray-100 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-6xl text-cyan-600">🏬</span>
                </div>
                <div class="relative z-10">
                    <div class="text-3xl mb-3">🏬</div>
                    <h3 class="text-gray-800 font-extrabold text-sm md:text-lg leading-tight">Daftar<br>Toko</h3>
                </div>
                </a>

                <a href="{{ route('ac.index') }}" 
                class="group relative overflow-hidden bg-white p-6 md:p-10 rounded-3xl shadow-sm border border-gray-100 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-6xl text-indigo-600">🎨</span>
                </div>
                <div class="relative z-10">
                    <div class="text-3xl mb-3">🎨</div>
                    <h3 class="text-gray-800 font-extrabold text-sm md:text-lg leading-tight">Jenis &<br>Tipe AC</h3>
                </div>
                </a>

                <a href="{{ route('material.index') }}"
                class="group relative overflow-hidden bg-white p-6 md:p-10 rounded-3xl shadow-sm border border-gray-100 text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-6xl text-teal-600">🧰</span>
                </div>
                <div class="relative z-10">
                    <div class="text-3xl mb-3">🧰</div>
                    <h3 class="text-gray-800 font-extrabold text-sm md:text-lg leading-tight">Material<br>Service</h3>
                </div>
                </a>
            </div>

            <p class="mt-12 text-gray-400 text-sm font-medium tracking-widest uppercase">Management System v1.0</p>
        </div>
    </div>

<script> 
    document.addEventListener('DOMContentLoaded', function() {
        const openSidebar = document.getElementById('openSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function toggleSidebar(isOpen) {
            if (isOpen) {
                sidebar.classList.remove('translate-x-full');
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.add('opacity-100'), 10);
            } else {
                sidebar.classList.add('translate-x-full');
                overlay.classList.remove('opacity-100');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }
        }

        openSidebar.addEventListener('click', () => toggleSidebar(true));
        closeSidebar.addEventListener('click', () => toggleSidebar(false));
        overlay.addEventListener('click', () => toggleSidebar(false));
    }) 
</script>
@endsection