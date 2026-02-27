<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
<<<<<<<< HEAD:database/migrations/2026_02_26_054314_create_bukus_table.php
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
========
    Schema::create('perpustakaans', function (Blueprint $table) {
        $table->id();
        $table->string('cover')->nullable();
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->text('tahun_terbit');
        $table->timestamps();
    });
>>>>>>>> aba93074b2d33b7c3a471fda556377e768089159:database/migrations/2026_02_26_014833_create)_perpustakaans_table.php
    }

    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2026_02_26_054314_create_bukus_table.php
        Schema::dropIfExists('bukus');
========
        //
>>>>>>>> aba93074b2d33b7c3a471fda556377e768089159:database/migrations/2026_02_26_014833_create)_perpustakaans_table.php
    }
};