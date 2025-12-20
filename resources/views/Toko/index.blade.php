@extends('layout.app')

@section('content')
    <div class="flex flex-col gap-y-10">
        <h1 class="text-center text-bold text-2xl">Daftar Toko</h1>

        <table class="text-center">
            <tr >
                <th class="py-5">Site</th>
                <th class="py-5">Site Descr</th>
                <th class="py-5">Store Type</th>
                <th class="py-5">Go Date</th>
                <th class="py-5">Province</th>
                <th class="py-5">City</th>
                <th class="py-5">District</th>
                <th class="py-5">Address</th>
                <th class="py-5" colspan="3">Actions</th>
            </tr>

            @forelse ($tokos as $toko)
                <tr class="border">
                    <td class="py-5 px-2">{{ $toko->site }}</td>
                    <td class="py-5 px-2">{{ $toko->site_descr }}</td>
                    <td class="py-5 px-2">{{ $toko->store_type }}</td>
                    <td class="py-5 px-2">{{ $toko->go_date }}</td>
                    <td class="py-5 px-2">{{ $toko->province }}</td>
                    <td class="py-5 px-2">{{ $toko->city }}</td>
                    <td class="py-5 px-2">{{ $toko->district }}</td>
                    <td class="py-5 px-2">{{ $toko->address }}</td>
                    <td class="py-5 px-2">
                        <a href="{{ route('toko.edit', $toko->id) }}"
                            class="bg-yellow-500 font-semibold py-1 px-3">Edit</a>
                    </td>
                    <td class="py-5 px-2">
                        <form action="{{ route('toko.destroy', $toko->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Kamu yakin menghapus toko ini?')"
                            class="bg-red-500 text-white px-3 py-1">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Daftar Toko Tidak ditemukan.</td>
                </tr>
            @endforelse
        </table>

        <div class="flex gap-x-5 justify-center">
            <a href="{{ route('toko.create')  }}"
            class="bg-blue-500 py-1 px-3 text-white font-semibold">Tambah Toko</a>
            
            <a href="{{ route('toko.export_pdf') }}"
            class="bg-red-500 py-1 px-3 text-white font-semibold">Export PDF
            </a>

            <a href="{{ route('toko.export_excel') }}"
            class="bg-green-500 py-1 px-3 text-white font-semibold">Export Excel
            </a>
        </div>

        <div class="flex justify-center">
            <form class="shadow p-5" action="{{ route('toko.import_excel') }}" method="POST" enctype="multipart/form-data">
                @csrf   

                <input type="file" name="file" required>

                <button type="submit" class="bg-purple-500 py-1 px-3 text-white font-semibold">
                    Import Excel
                </button>
            </form>
        </div>

        <div class="flex justify-center">
            <a href="{{ route('dashboard.index') }}"
            class="bg-red-500 font-semibold text-white px-3 py-1">Kembali</a>
        </div>
        
        
    </div>
    
@endsection
