@extends('layout.app')

@section('content')
    <a href="{{ route('gaji.index') }}"
        class="text-white font-semibold py-1 px-3 bg-red-500 rounded">Kembali</a>
    
        <h1>GAJI</h1>

    <form action="{{ route('gaji.store') }}" method="POST"
        class="p-10 shadow flex flex-col gap-y-5">
        @csrf
        
        <div class="input-group flex flex-col gap-y-2">
            <label>Gaji Pokok</label>
            <div class="relative">
                <input type="number" name="gaji_pokok" min="0" required
                >
                <div class="absolute top-0 left-[-35px] bg-gray-500 px-2">Rp</div>
            </div>
            
        </div>
        <div class="input-group flex flex-col gap-y-2">
            <label>Tunjangan Jabatan</label>
            <input type="number" name="tunjangan_jabatan" min="0" required>
        </div>
        <div class="input-group flex flex-col gap-y-2">
            <label>Tunjangan Daerah</label>
            <input type="number" name="tunjangan_daerah" min="0" required>
        </div>
        <div class="input-group flex flex-col gap-y-2">
            <label>Tunjangan PPh</label>
            <input type="number" name="tunjangan_pph" min="0" required>
        </div>

        <div class="input-group flex flex-col gap-y-2">
            <label>Iuran Dana Pensiun</label>
            <input type="number" name="iuran_dana_pensiun" min="0" required>
        </div>

        <div class="input-group flex flex-col gap-y-2">
            <label>Potongan PPh 21</label>
            <input type="number" name="potongan_pph" min="0" required>
        </div>

        <button type="submit"
        class="text-white bg-blue-500 rounded py-1 px-3 font-semibold">
            Simpan
        </button>
    </form>
@endsection