@extends('Layout.auth')

@section('content')
    <div class="flex flex-col p-5">
        <h1 class="text-center font-bold text-2xl">LOGIN</h1>
        <form action="{{ route('login.store') }}" method="POST"
            class="space-y-6 p-10">
            @csrf

            <div class="input-group flex justify-between">
                <label class="text-xl font-semibold">Email</label>
                <input type="email" name="email" required
                class="text-xl rounded border">
            </div>

            <div class="input-group flex justify-between">
                <label class="text-xl font-semibold">Password</label>
                <input  type="password" name="password" required
                class="text-xl rounded border focus:border-2 focus:border-blue-300 outline-none">
            </div>
            
            <div class="flex flex-col gap-y-2 text-center">
                <button type="submit" class="bg-cyan-200 font-semibold text-xl">Login</button>

                <div class="flex flex-col text-sm">
                    <p class="">Don't have an account ? </p>
                    <a href="{{ route('login') }}" class="text-blue-600">Sign up here</a>
                </div>
                
            </div>
            
        </form>
    </div>
@endsection
