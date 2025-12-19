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

</head>
<body>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Selamat Datang "{{ Auth::user()->username }}"👋',
                text: "{{ session(key: 'success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif


    <div class="min-h-screen flex justify-center items-center">
        @yield('content')
    </div>


</body>
</html>