@extends('layout.app')

@section('content')
    
    <div class="flex flex-col gap-y-10 w-[90%] mx-auto">    
        {{-- judul --}}
        <h1 class="text-center font-bold text-2xl">Jenis dan Tipe AC</h1>

        {{-- btn kembali --}}
        <div class="flex justify-start">
            <a href="{{ route('dashboard.index') }}"
            class="bg-red-500 font-semibold text-white px-3 py-1 ">Kembali</a>
        </div>

        {{-- header --}}
        <div class="flex justify-start">
                <div class="flex justify-center items-center">
                    <form action="{{ route('ac.import') }}" method="POST"
                    enctype="multipart/form-data"
                    class="rounded py-1 px-3 shadow">
                        @csrf
                        <div class="flex justify-between">
                            <input type="file" name="file" required class="py-2">
                            <button type="submit"
                            class="bg-green-500 py-1 px-3 text-white font-semibold">
                            Import</button>
                        </div>
                    </form>
                </div>
        </div>

        {{-- cards --}}
        <div class="flex flex-col gap-y-10">
                @forelse ($acs as $ac)
                    <div class="flex flex-col gap-y-2 shadow p-10 rounded-xl bg-blue-400 text-white">
                        <h2 class="text-xl font-bold mb-5">📦 {{ $ac->nama_barang }}</h2>
                        <h2 class="text-lg font-semibold">⚙ Store Type: {{ $ac->satuan }}</h2>                            
                        <h2 class="text-lg font-semibold">💰 Harga Satuan:  Rp {{ number_format($ac->harga_satuan, 2, ',', '.')}}</h2>                            
                        <h2 class="text-lg font-semibold">💰 Jumlah Harga: Rp {{ number_format($ac->jumlah_harga, 2, ',', '.')}}</h2>                            
                        <h2 class="text-lg font-semibold">🗺 {{ $ac->lokasi }}</h2>                            
                            <div class="flex justify-center gap-x-3 items-center mt-5">
                                <a type="submit" href="{{ route('toko.edit',  $ac->id ) }}"
                                class="bg-yellow-500 text-black px-3 py-1 rounded-lg font-semibold">Edit</a>
                                <form action="{{ route('toko.destroy', $ac->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Kamu yakin menghapus toko ini?')"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg font-semibold">Hapus</button>
                                </form>
                            </div>
                    </div>
                @empty
                    <h2>Tidak ditemukan</h2>
                @endforelse
        </div>
    </div>
@endsection