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
        Schema::create('makalahs', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profil');
            $table->string('foto');
            $table->string('nama');
            $table->string('judul');
            $table->string('isi');
            $table->string('status')->default('pandding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makalah');
    }
};
