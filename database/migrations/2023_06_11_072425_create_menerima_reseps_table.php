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
        Schema::create('menerima_reseps', function (Blueprint $table) {
            $table->id();
            $table->string('id_dokter');
            $table->string('id_resep');
            $table->string('id_pembayaran');
            $table->string('id_pasien');
            $table->date('tanggal resep');
            $table->string('resep');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menerima_reseps');
    }
};
