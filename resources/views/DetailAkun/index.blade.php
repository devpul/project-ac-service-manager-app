@extends('Layout.app')

@section('content')
    <div class="mx-auto md:w-[50%] w-full ">
        <form action="{{ route('detail.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="bg-white overflow-hidden rounded-xl shadow-sm  transition-shadow border border-gray-100 shadow border-gray-200">
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-5">
                    <h1 class="text-2xl font-bold text-white text-center">👨‍💼 DETAIL AKUN</h1>
                </div>

                <div class="flex flex-col gap-y-8 p-5">
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📝 Fullname</label>
                        <input type="text" name="fullname" value="{{ $user->fullname }}"
                        class="w-full outline-none px-3 py-1 focus:border-blue-500 focus:shadow-cyan-50 focus:shadow border rounded">
                        @error('fullname')
                            <div class="text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">👤 Username</label>
                        <input type="text" name="username" value="{{ $user->username }}"
                        class="w-full outline-none px-3 py-1 focus:border-blue-500 focus:shadow-cyan-50 focus:shadow border rounded">
                        @error('username')
                            <div class="text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📧 Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" min="1"
                        class="w-full outline-none px-3 py-1 focus:border-blue-500 focus:shadow-cyan-50 focus:shadow border rounded">
                        @error('email')
                            <div class="text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">🔐 Password</label>
                        <input type="password" name="password" value=""
                        class="w-full outline-none px-3 py-1 focus:border-blue-500 focus:shadow-cyan-50 focus:shadow border rounded">
                        @error('password')
                            <div class="text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                    <div class="space-y-1">
                        <label class="block font-semibold text-md">📞 Phone</label>
                        <input type="tel" name="phone" value="{{ $user->phone }}"
                        class="w-full outline-none px-3 py-1 focus:border-blue-500 focus:shadow-cyan-50 focus:shadow border rounded">
                        @error('phone')
                            <div class="text-sm text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                                                     
                </div>

                <div class="flex gap-x-3 justify-center pt-5 pb-10">
                    <button type="submit"
                    class="font-semibold py-1 px-5 border bg-gradient-to-r from-green-500 to-green-600 rounded-full text-white">Simpan</button>
                    
                    <a href="{{ route('dashboard.index') }}"
                     class="font-semibold py-1 px-5 border bg-gradient-to-r from-red-500 to-red-600 rounded-full text-white">Batalkan</a>
                </div>
            </div>
        </form>
    </div>
     
@endsection