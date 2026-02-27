<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    Schema::create('perpustakaans', function (Blueprint $table) {
        $table->id();
        $table->string('cover')->nullable();
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->text('tahun_terbit');
        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
        //
    }
};