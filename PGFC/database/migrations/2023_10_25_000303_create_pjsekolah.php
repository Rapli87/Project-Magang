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
        Schema::create('pjsekolah', function (Blueprint $table) {
            $table->id();
            $table->integer('pj_sekolah_id');
            $table->string('nama_kepala_sekolah');
            $table->integer('alamat_kepala_sekolah'); 
            $table->string('telp');
            $table->string('hp');
            $table->string('email');
            $table->string('filerekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pjsekolah');
    }
};
