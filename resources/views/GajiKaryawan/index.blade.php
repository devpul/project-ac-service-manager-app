@extends('layout.app')

@section('content')
    <div class="flex flex-col gap-y-5 w-[95%] mx-auto">
        <h1 class="text-2xl font-bold underline text-center">Gaji Karyawan</h1>

        <div class="flex justify-between">
            <a href="{{ route('karyawan.index') }}"
            class="text-white font-semibold py-2 px-4 bg-red-500 rounded">Kembali</a>
        
            <a href="{{ route('gaji.create') }}"
        class="text-white font-semibold py-2 px-4 bg-blue-500 rounded">⚙ Aksi</a>
        </div>

        <table border="1" class="border" cellpadding="12">
            <tr class="border">
                <th colspan="5">Slip Gaji</th>
            </tr>

            <tr class="border">
                <th colspan="2">Pendapatan</th>
                <th colspan="2">Potongan</th>
            </tr>
            
                <tr>
                    <th class="text-left">Gaji Pokok</th>
                    <td>Rp {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</td>

                    <th class="text-left">Iuran Dana Pensiun</th>
                    <td>Rp {{ number_format($gaji->iuran_dana_pensiun, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th class="text-left">Tunjangan Jabatan</th>
                    <td>Rp {{ number_format($gaji->tunjangan_jabatan, 0, ',', '.') }}</td>
                    
                    <th class="text-left">Potongan PPh 21</th>
                    <td>Rp {{ number_format($gaji->potongan_pph, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th class="text-left">Tunjangan Daerah</th>
                    <td>Rp {{ number_format($gaji->tunjangan_daerah, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th class="text-left">Tunjangan PPH</th>
                    <td>Rp {{ number_format($gaji->tunjangan_pph, 0, ',', '.') }}</td>
                </tr>
                <tr class="border">
                    <th class="text-left">Jumlah Pendapatan</th>
                    <td>Rp {{ number_format($gaji->jumlah_pendapatan, 0, ',', '.') }}</td>
                    
                    <th class="text-left">Jumlah Potongan</th>
                    <td>Rp {{ number_format($gaji->jumlah_potongan, 0, ',', '.') }}</td>
                </tr>
                <tr class="border">
                    <th colspan="3">Gaji Bersih Diterima</th>
                    <td>11.477.500</td>
                </tr>
        </table>
    </div>
@endsection