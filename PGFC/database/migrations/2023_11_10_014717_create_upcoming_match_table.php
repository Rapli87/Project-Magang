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
        Schema::create('upcoming_match', function (Blueprint $table) {
            $table->id(); // Kolom ID yang otomatis
            // $table->string('slug')->unique(); // Kolom slug yang unik
            $table->string('home_team'); // Nama tim tuan rumah
            $table->string('away_team'); // Nama tim tamu
            $table->dateTime('match_datetime'); // Waktu dan tanggal pertandingan
            $table->string('vanue'); // Tempat pertandingan
            $table->string('home_team_logo'); // Kolom untuk logo tim home
            $table->string('away_team_logo'); // Kolom untuk logo tim away
            // $table->text('description')->nullable(); // Deskripsi pertandingan (opsional)
            $table->softDeletes(); // Kolom hapus sementara (soft delete
            $table->timestamps(); // Kolom tanggal pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcoming_match');
    }
};
