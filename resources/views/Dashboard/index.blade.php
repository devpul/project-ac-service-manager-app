@extends('Layout.app')

@section('content')
<div>
    <h1>Dashboard Page</h1>

    <form action="{{ route('logout') }}" method="POST" class="text-center">
        @csrf

        <button class="bg-red-500 font-semibold text-white px-3 py-1 mt-5" type="submit">Logout</button>
    </form>
</div>
@endsection