@extends('Layout.auth')

@section('content')
    <div class="flex flex-col shadow-md p-5">
        <h1 class="text-center">LOGIN</h1>
        <form action="{{ route('login.store') }}" method="POST"
            class="space-y-5">
            @csrf

            <div class="input-group flex justify-between">
                <label>Email</label>
                <input type="email" name="email" class="border" required>
            </div>

            <div class="input-group flex justify-between">
                <label>Password</label>
                <input type="password" name="password" class="border" required>
            </div>
            
            <div class="flex flex-col">
                <button type="submit" class="bg-cyan-200 font-semibold">Login</button>
                <p>Don't have an account ? <a href="">Sign up here</a></p>
            </div>
            
        </form>
    </div>
@endsection
