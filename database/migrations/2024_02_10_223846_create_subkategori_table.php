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
        Schema::create('subkategori', function (Blueprint $table) {
            $table->id('subkategori_id');
            $table->string('nama_sub');
            // Foreign Key
            $table->unsignedBigInteger('sk_kategori_id');
            $table->foreign('sk_kategori_id')->references('kategori_id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkategori');
    }
};
