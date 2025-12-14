@extends('layout.auth')

@section('content')
    
    <form action="{{ route('register.store') }}" method="POST" 
    class="shadow p-5 flex flex-col gap-y-3">
        @csrf

        <h1>REGISTER</h1>

        <div class="input-group flex flex-col gap-y-2">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        @error('username')
            <p class="text-red-500">{{ $message }}</p>
        @enderror  

        <div class="input-group flex flex-col gap-y-2">
            <label>Phone</label>
            <input type="text" name="phone" required>
        </div>
        @error('phone')
            <p class="text-red-500">{{ $message }}</p>
        @enderror    

        <div class="input-group flex flex-col gap-y-2">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror    

        <div class="input-group flex flex-col gap-y-2">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror    

        <div class="input-group flex flex-col gap-y-2">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" required>
        </div>
        @error('password_confirmation')
            <p class="text-red-500">{{ $message }}</p>
        @enderror   

        <button type="submit">Submit</button>
    </form>
@endsection