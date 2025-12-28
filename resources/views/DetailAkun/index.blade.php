@extends('Layout.app')
@section('content')
    <div class="w-[100%] mx-auto space-y-10 flex flex-col items-left">
        <div class="px-2">
            <a href="{{ route('dashboard.index') }}" 
            class="font-bold text-white py-2 px-3 rounded bg-red-500">kembali</a>
        </div>
    
        <h1 class="text-center font-bold text-2xl">👨‍💻 Detail Akun</h1>

        <form action="" method="POST"
        class="flex flex-col gap-y-7 p-5">
            @csrf
            @method('PUT')


            <div class="flex flex-col gap-y-3">
                <label class="text-lg font-bold">📝 Fullname</label>
                <input type="text" name="fullname" value="Nadine Viga" required
                class="px-2 py-1 outline-none border focus:border-cyan-400 rounded transition">
            </div>
            <div class="flex flex-col gap-y-3">
                <label class="text-lg font-bold">👤 Username</label>
                <input type="text" name="username" value="Nadine" required
                class="px-2 py-1 outline-none border focus:border-cyan-400 rounded transition">
            </div>
            <div class="flex flex-col gap-y-3">
                <label class="text-lg font-bold">📧 Email</label>
                <input type="text" name="email" value="nadine@gmail.com" required
                class="px-2 py-1 outline-none border focus:border-cyan-400 rounded transition">
            </div>
           
            <div class="flex flex-col gap-y-3">
                <label class="text-lg font-bold">📞 Phone</label>
                <input type="text" name="phone" value="083212345" maxlength="15" required
                class="px-2 py-1 outline-none border focus:border-cyan-400 rounded transition">
            </div>

            <button type="submit"
            class="bg-blue-500 text-white py-2 px-3 rounded font-bold">Simpan</button>
        </form>
    </div>
@endsection