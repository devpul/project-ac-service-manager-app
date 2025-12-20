@extends('layout.app')

@section('content')
    <div class="flex flex-col p-5 gap-y-5 bg-blue-500">

        <form action="{{ route('toko.update', $toko->id) }}" method="POST"
            class="flex flex-col gap-y-5">
            @csrf
            @method('PUT')

            <div class="input-group">
                <label for="site">Site</label>
                <input type="number" name="site" value="{{ $toko->site }}" id="site">
            </div>
            <div class="input-group">
                <label for="site_descr">Site</label>
                <input type="number" name="site_descr" value="{{ $toko->site_descr }}" id="site_descr">
            </div>
            <div class="input-group">
                <label for="site">Site</label>
                <input type="number" name="site" value="{{ $toko->site }}" id="site">
            </div>
            <div class="input-group">
                <label for="site">Site</label>
                <input type="number" name="site" value="{{ $toko->site }}" id="site">
            </div>
            <div class="input-group">
                <label for="site">Site</label>
                <input type="number" name="site" value="{{ $toko->site }}" id="site">
            </div>
            <div class="input-group">
                <label for="site">Site</label>
                <input type="number" name="site" value="{{ $toko->site }}" id="site">
            </div>

            <button type="submit"
            class="bg-yellow-500 px-3 py-1">Update</button>
        </form>

        <a href="{{ route('toko.index') }}"
        class="bg-red-500 text-white px-3 py-1">Kembali</a>
        
    </div>
@endsection
