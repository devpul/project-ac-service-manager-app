@extends('Layout.app')

@section('content')
    <div class="mx-auto lg:w-[50%] w-full">
        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="bg-white overflow-hidden rounded-xl   transition-shadow ">

                <div class=" p-5">
                    <h1 class="text-2xl font-bold text-center">LOGIN 👤</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">

                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📧 Email</label>
                        <input type="email" name="email" required
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🔒 Password</label>
                        <input type="password" name="password" required 
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                    </div>
                </div>

                <div class="flex flex-col gap-y-3 items-center p-5">
                    <button type="submit"
                    class="font-semibold py-2 md:w-[80%] w-full border bg-gradient-to-r from-green-500 to-green-600 rounded-full text-white">Masuk</button>
                    
                    <a href="{{ route('register') }}"
                     class="italic text-center">Tidak punya akun ? <span class="text-blue-600">Daftar di sini</span></a>
                </div>
            </div>
        </form>
    </div>
     
@endsection