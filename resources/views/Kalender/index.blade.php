@extends('layout.app')

@section('content')
    
    <div class="flex flex-col gap-y-10 w-[100%] mx-auto">
        <a href="{{ route('dashboard.index') }}"
        class="bg-red-500 text-white font-semibold px-3 py-1">
            Kembali
        </a>

        <div class="p-5" id="calendar"></div>

        <div class="flex justify-center gap-x-5">
            <div class="flex gap-x-2">
                <div class="w-[20px] h-[20px] bg-red-500 border"></div>
                <p>halo</p>
            </div>
            <div class="flex gap-x-2">
                <div class="w-[20px] h-[20px] bg-red-500 border"></div>
                <p>halo</p>
            </div>
            <div class="flex gap-x-2">
                <div class="w-[20px] h-[20px] bg-red-500 border"></div>
                <p>halo</p>
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