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
        Schema::create('data_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Sekolah');
            $table->string('Telp')->unique();
            $table->String('Fax')->nullable();
            $table->string('Email')->nullable();
            $table->string('password')->nullable();
            $table->string('Tanggal_update')->nullable();
            $table->string('Logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sekolahs');
    }
};
