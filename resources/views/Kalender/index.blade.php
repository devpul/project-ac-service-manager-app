@extends('layout.app')

@section('content')
    
    <div class="flex flex-col  gap-y-10 w-full mx-auto py-2">

        <div class="flex flex-col md:flex-row justify-between">
            <a href="{{ route('dashboard.index') }}"
            class="group text-slate-700 font-medium text-sm px-3 py-1 hover:text-blue-600 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                        class=" w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                <span>Kembali ke Dashboard</span>
            </a>
            <h1 class="text-3xl font-bold text-slate-800">Jadwal & Kegiatan</h1>
            <div class="hidden md:block"></div>
        </div>
        

        <div class="p-5" id="calendar"></div>

        
        <div class="flex flex-col items-center justify-center gap-y-2 border-4 border-dashed p-3 bg-gray-100 mx-auto">
            <span class="text-center w-full font-semibold text-xl">Keterangan</span>
            <div class="flex justify-center gap-x-5">
                <div class="flex gap-x-2">
                    <div class="w-[25px] h-[25px] bg-green-500 border"></div>
                    <p class=" font-medium">TODAY</p>
                </div>
            </div>  
        </div>
        
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let calendarEl = document.getElementById('calendar');

        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'id',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: null
            },
            events: 'kalender/api/meetings',
            eventTimeFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            }
        });

        calendar.render();
    });
</script>

@endsection