@extends('layout.app')

@section('content')
    <div class="flex flex-col gap-y-5">
        <h1>Daftar Toko</h1>
        
        <a href="{{ route('toko.create')  }}"
        class="bg-blue-500 py-1 px-3 text-white font-semibold">Tambah Toko</a>
        
        <a href="{{ route('toko.download') }}"
        class="bg-red-500 py-1 px-3 text-white font-semibold">Import PDF
        </a>
    </div>
    
@endsection
