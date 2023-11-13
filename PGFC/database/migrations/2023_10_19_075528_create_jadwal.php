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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('grup');
            $table->string('id_grup');
            $table->integer('grup_id');
            $table->string('id_jadwal');
            $table->string('id_tim');
            $table->string('id_tim2');
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('selesai');
            $table->string('status');
            $table->string('skor');
            $table->string('id_sekolah');
            $table->string('id_user');
            $table->string('id_lomba');                         
            $table->foreign('grup_id')->references('id')->on('grubs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
        
    }
};
