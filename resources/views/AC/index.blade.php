@extends('layout.app')

@section('content')
    
    <div class="flex flex-col gap-y-10 ">
        <a href="{{ route('dashboard.index') }}"
        class="text-white font-semibold rounded py-1 px-3 bg-red-500">Kembali</a>

        <h1 class="pb-5 text-center font-bold text-2xl">Jenis dan Tipe AC</h1>

        <table cellpadding="8">
            <tr class="border">
                <th class="py-1 px-2">No</th>
                <th class="py-1 px-2">Nama Barang</th>
                <th class="py-1 px-2">Satuan</th>
                <th class="py-1 px-2">Harga Satuan</th>
                <th class="py-1 px-2">Jumlah Harga</th>
                <th class="py-1 px-2">Lokasi</th>
                <th class="py-1 px-2">Aksi</th>
            </tr>

            @php $no = 1 @endphp

            @forelse ($acs as $ac)
                <tr class="border">
                    <td>{{ $no++ }}</td>
                    <td>{{ $ac->nama_barang }}</td>
                    <td>{{ $ac->satuan }}</td>
                    <td>{{ $ac->harga_satuan }}</td>
                    <td>{{ $ac->jumlah_harga }}</td>
                    <td>{{ $ac->lokasi }}</td>
                    <td>
                        <form action="{{ route('ac.destroy', $ac->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                            class="text-white font-semibold rounded py-1 px-3 bg-red-500">Hapus</button>

                        </form>
                    </td>
                </tr> 
            @empty
                <tr class="text-center">
                    <td colspan="5">Jenis dan Tipe AC tidak ditemukan. </td>
                </tr>
            @endforelse
            
        </table>

        <form action="{{ route('ac.import') }}" method="POST"
        enctype="multipart/form-data"
        class="rounded py-1 px-3 shadow">
            @csrf

            <div class="flex justify-between">
                <input type="file" name="file" required>

                <button type="submit"
                class="rounded py-1 px-3 text-green-500 border border-green-500 font-bold">
                Import Excel</button>
            </div>
            
        </form>
    </div>
@endsection