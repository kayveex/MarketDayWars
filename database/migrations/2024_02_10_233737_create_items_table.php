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
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('nama_item', 45);
            $table->string('fotoItem');
            $table->bigInteger('harga');
            $table->integer('kuantitas');
            $table->text('deskripsi_item');
            // Foreign Key - Start
            $table->unsignedBigInteger('item_subkategori_id');
            $table->foreign('item_subkategori_id')->references('subkategori_id')->on('subkategori');

            $table->unsignedBigInteger('item_tenant_id');
            $table->foreign('item_tenant_id')->references('tenant_id')->on('tenants');
            // Foreign Key - End


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
