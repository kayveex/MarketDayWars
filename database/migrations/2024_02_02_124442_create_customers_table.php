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
        Schema::create('customers', function (Blueprint $table) {
            // Primary Key - Start
            $table->id('cust_id');
            // Primary Key - End

            $table->string('nama_cust', 45);
            $table->integer('no_induk');
            $table->string('no_wa', 20)->nullable();
            // Foreign Key - Start
            $table->unsignedBigInteger('cust_uid');
            $table->foreign('cust_uid')->references('id')->on('users');

            $table->unsignedBigInteger('cust_kelas_id');
            $table->foreign('cust_kelas_id')->references('kelas_id')->on('kelas');
            // Foreign Key - End
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
