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
        Schema::create('formsurvey', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama_mahasiswa', 35)->nullable();
            $table->integer('semester');
            $table->string('nama_dosen', 35)->nullable();
            $table->string('matakuliah', 35)->nullable();
            // Pertanyaan
            $table->enum('survey1', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey2', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey3', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey4', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey5', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey6', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            $table->enum('survey7', ['1', '2', '3', '4', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'])->nullable();
            // akhir pertanyaan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formsurvey');
    }
};
