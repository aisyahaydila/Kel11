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
        Schema::create('penyediaan_obats', function (Blueprint $table) {
            $table->id();
            $table->string('id_obat');
            $table->string('nama_obat');
            $table->string('deskripsi_obat');
            $table->string('kadaluwarsa');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyediaan_obats');
    }
};
