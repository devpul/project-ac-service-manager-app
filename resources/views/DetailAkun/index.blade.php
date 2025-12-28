@extends('Layout.app')
@section('content')
    <div class="w-[90%] mx-auto space-y-10 flex flex-col items-left">
        <div>
            <a href="{{ route('dashboard.index') }}" 
            class="font-bold text-white py-1 px-3 rounded bg-red-500">kembali</a>
        </div>
    
        <h1 class="text-center font-bold text-2xl">👨‍💻 Detail Akun</h1>

        <form action="" method="POST"
        class="flex flex-col gap-y-5 p-5 shadow">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold"> Username :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold">📧 Email :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold">Email :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold">Email :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold">Email :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
            <div class="flex flex-col gap-y-2">
                <label class="text-lg font-bold">Email :</label>
                <input type="text" name="email" value="nadine@gmail.com" required>
            </div>
        </form>
    </div>
@endsection