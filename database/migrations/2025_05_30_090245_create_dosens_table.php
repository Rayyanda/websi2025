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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('nama');
            $table->string('jabatan');
            $table->enum('sertifikasi_dosen',['Belum Memiliki','Memiliki']);
            $table->text('bidang_pengajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
