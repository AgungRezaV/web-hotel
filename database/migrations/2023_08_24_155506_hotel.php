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
        Schema::create('pembeli', function (Blueprint $table){
            $table->id();
            $table->string('nama_pemesan');
            $table->string('jenis_kelamin');
            $table->string('nomor_identitas');
            $table->string('tipe_kamar');
            $table->string('harga');
            $table->string('tanggal_pesan');
            $table->string('durasi_menginap');
            $table->string('breakfast');
            $table->string('total_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembeli');
    }
};
