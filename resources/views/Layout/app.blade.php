<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- cdn tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- cdn fullcalendar --}}
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    <style>
        /* 1. Warna background utama kalender */
.fc {
    background-color: #1a1a1a; /* Hitam abu-abu gelap */
    color: #ffffff; /* Teks putih */
}

/* 2. Warna background cell tanggal */
.fc .fc-daygrid-day {
    background-color: #242424; 
}

/* 3. Warna garis tepi (border) */
.fc td, .fc th, .fc .fc-scrollgrid {
    border-color: #444 !important;
}

/* eventnya */
.fc-event{
    display: flex;
    flex-direction: column;
}

/* 4. Warna header nama hari */
.fc .fc-col-header-cell {
    background-color: #333;
}

/* 7. Hover effect saat cell disorot */
.fc .fc-daygrid-day:hover {
    background-color: #2c2c2c;
}

/* cell hari ini */
.fc .fc-day-today{
    background-color:rgb(60, 156, 51) !important;
}

/* kalender */
.fc-view-harness{
    height:40rem !important;
    width:50rem;
}

/* Responsif: Menghilangkan ukuran kaku */
.fc-view-harness, .fc {
    height: auto !important; /* Biar tinggi menyesuaikan konten */
    min-height: 30rem; /* Beri batas minimal */
    width: 100%; /* Full di layar HP */
    max-width: 1000px; /* Batas maksimal di PC */
    margin:auto;
}

/* Mengatur ukuran teks event di HP agar tidak meluber */
@media (max-width: 640px) {
    .fc .fc-toolbar-title {
        font-size: 1.2rem !important; /* Judul lebih kecil di HP */
    }
    .fc .fc-toolbar {
        flex-direction: column; /* Toolbar tumpuk vertikal di HP */
        gap: 0.5rem;
    }
    .fc-event-title {
        font-size: 0.75rem; /* Teks event lebih kecil */
    }
}

    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col justify-center items-center">
        @yield('content')
    </div>


    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                text: "{{ session(key: 'success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                icon: 'warning',
                text: "{{ session(key: 'error') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
</body>
</html>