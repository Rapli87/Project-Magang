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
        Schema::create('pemain', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('data_sekolah_id'); 
            $table->integer('pj_sekolah_id');
            $table->integer('pj_tim_id');
            $table->integer('data_pelatih_id');
            $table->integer('data_official_id');
            $table->integer('data_manajer_id');
            $table->integer('data_supportersiswa_id');
            $table->integer('data_supporterguru_id');
            $table->string('No_punggung');
            $table->string('Kelas');
            $table->string('Tanggal_lahir');
            $table->string('Ijasah');
            $table->string('Rapor');
            $table->string('Keterangan_Siswa');
            $table->string('Kartu_Siswa');
            $table->string('Foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemain');
    }
};
