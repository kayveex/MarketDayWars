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
        Schema::create('cashflow', function (Blueprint $table) {
            $table->id('cashflow_id');
            $table->enum('tipe', ['topup','cashout']);
            $table->bigInteger('jumlah');
            $table->enum('status_cashflow', ['disetujui','ditolak']);
            $table->timestamps();
            // Foreign Key
            $table->unsignedBigInteger('cashflow_uid');
            $table->foreign('cashflow_uid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashflow');
    }
};
