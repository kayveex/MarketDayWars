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
        Schema::create('tenants', function (Blueprint $table) {
            // Primary Key - Start
            $table->id('tenant_id');
            // Primary Key - End
            $table->string('nama_tenant', 45);
            $table->text('deskripsi');
            // Attributes

            // Foreign Key - Start
            $table->unsignedBigInteger('tenant_uid');
            $table->foreign('tenant_uid')->references('id')->on('users');
            // Foreign Key - End

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
