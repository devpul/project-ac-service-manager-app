@extends('Layout.app')
@section('content')
    <div class="group  w-full md:w-[90%] mx-auto space-y-10 flex flex-col items-left">
        <a href="{{ route('dashboard.index') }}" 
            class="p-5 inline-flex hover:text-blue-500 font-semibold text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="size-6 group-hover:-translate-x-1 transition duration-300 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            Kembali ke Dashboard
        </a>
    
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