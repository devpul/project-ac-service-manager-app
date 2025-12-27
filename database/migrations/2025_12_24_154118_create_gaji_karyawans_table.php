<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gaji_karyawans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                    ->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->decimal('gaji_pokok', 10, 2)->nullable();
            $table->decimal('tunjangan_jabatan', 10, 2)->nullable();
            $table->decimal('tunjangan_daerah', 10, 2)->nullable();
            $table->decimal('tunjangan_pph', 10, 2)->nullable();
            $table->decimal('iuran_dana_pensiun', 10, 2)->nullable();
            $table->decimal('potongan_pph', 10, 2)->nullable();
            $table->decimal('jumlah_pendapatan', 10, 2)->nullable();
            $table->decimal('jumlah_potongan', 10, 2)->nullable();
            $table->decimal('gaji_bersih_diterima', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaji_karyawans');
    }
};
