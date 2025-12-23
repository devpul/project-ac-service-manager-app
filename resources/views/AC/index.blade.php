@extends('layout.app')

@section('content')
    <h1 class="pb-5">Jenis dan Tipe AC</h1>

    <table>
        <tr class="border">
            <th class="py-1 px-2">No</th>
            <th class="py-1 px-2">Nama Barang</th>
            <th class="py-1 px-2">Satuan</th>
            <th class="py-1 px-2">Harga Satuan</th>
            <th class="py-1 px-2">Jumlah Harga</th>
        </tr>

        @php
            $no = 1;
        @endphp

        @forelse ($acs as $ac)
            <tr class="border">
                <td>{{ $no++ }}</td>
                {{-- <td>{{ $no++ }}</td> --}}
            </tr> 
        @empty
            <tr class="text-center">
                <td colspan="5">Jenis dan Tipe AC tidak ditemukan. </td>
            </tr>
        @endforelse
        
    </table>
@endsection