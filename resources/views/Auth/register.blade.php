@extends('Layout.app')

@section('content')
    <div class="mx-auto lg:w-[50%] w-full">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="bg-white overflow-hidden rounded-xl   transition-shadow ">

                <div class=" p-5">
                    <h1 class="text-2xl font-bold text-center">REGISTER 👤</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">

                    <div class="space-y-1">
                        <label class="block font-semibold text-md">👨‍⚕️ Username</label>
                        <input type="text" name="username" required
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                        @error('username')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📧 Email</label>
                        <input type="email" name="email" required
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🔒 Password</label>
                        <input type="password" name="password" required 
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🔐 Confirm Password</label>
                        <input type="password" name="password_confirmation" required 
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📞 Phone</label>
                        <input type="tel" name="phone" required
                        class="w-full outline-none px-3 py-1 focus:border-blue-200 border rounded">
                        @error('phone')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col gap-y-3 items-center p-5">
                    <button type="submit"
                    class="font-semibold py-2 md:w-[80%] w-full border bg-gradient-to-r from-green-500 to-green-600 rounded-full text-white">Masuk</button>
                    
                    <a href="{{ route('login') }}"
                     class="italic text-center">Sudah punya akun ? <span class="text-blue-600">Daftar</span></a>
                </div>
            </div>
        </form>
    </div>
     
@endsection