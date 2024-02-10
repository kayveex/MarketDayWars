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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id('notif_id');
            $table->integer('no_referensi');
            $table->timestamps();
            $table->enum('status', ['berhasil','gagal']);
            $table->string('pesan');
            $table->boolean('isOpened')->default(0);
            // Foreign Key
            $table->unsignedBigInteger('notif_uid');
            $table->foreign('notif_uid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
