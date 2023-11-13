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
        Schema::create('pjtim', function (Blueprint $table) {
            $table->id();
            $table->integer('pj_tim_id');
            $table->string('nama');
            $table->integer('jabatan'); 
            $table->string('nip');
            $table->string('hp');
            $table->string('email');
            $table->string('foto');
            $table->string('ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pjtim');
    }
};
