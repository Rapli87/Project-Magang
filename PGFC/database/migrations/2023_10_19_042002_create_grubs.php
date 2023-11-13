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
        Schema::create('grubs', function (Blueprint $table) {
            $table->id();
            $table->string('tim');
            $table->string('main');
            $table->string('menang');
            $table->string('kalah');
            $table->string('seri');
            $table->string('poin');
            $table->string('gol');
            $table->string('gol_k');
            $table->string('selisih');
            $table->string('peringkat');
            $table->string('grup');
            $table->string('id_sekolah');
            $table->string('id_user');
            $table->string('id_lomba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grubs');
    }
};
