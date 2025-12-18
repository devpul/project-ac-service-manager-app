@extends('Layout.app')

@section('content')
    
    <aside id="openSidebar" class="absolute top-0 right-0 z-5 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </aside>

    <div id="sidebar" class="min-h-screen absolute top-0 right-0 bg-gray-50 w-[150px] transition">
        <div id="closeSidebar" class="flex justify-end transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
        
        <ul class="p-3 space-y-4">
            <li class="hover:bg-blue-500 transition">halo</li>
            <li class="hover:bg-blue-500 transition">halo</li>
            <li class="hover:bg-blue-500 transition">halo</li>
        </ul>
    </div>

    <div class="flex flex-col justify-center items-center gap-y-10">
        <h1>DASHBOARD</h1>
        <img src="{{ asset('assets/logo-pt-higo.png') }}"
        width="150px">
        
        <div class="grid grid-cols-2 gap-5">
            <h2 class="font-semibold bg-cyan-400 text-center p-10">Kalender</h2>
            <h2 class="font-semibold bg-cyan-400 text-center p-10">Kalender</h2>
            <h2 class="font-semibold bg-cyan-400 text-center p-10">Kalender</h2>
            <h2 class="font-semibold bg-cyan-400 text-center p-10">Kalender</h2>
        </div>
    </div>

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