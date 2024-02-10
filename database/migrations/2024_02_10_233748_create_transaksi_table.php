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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->date( 'tgl_transaksi');
            $table->bigInteger('no_pembelian');
            $table->integer('kuantitas');
            $table->bigInteger('harga_satuan');
            $table->bigInteger('total_harga');
            $table->boolean('isAccepted')->default(0);
            $table->enum('status_pesanan', ['proses','selesai']);

            // Foreign Key - Start
            $table->unsignedBigInteger('transaksi_cust_id');
            $table->foreign('transaksi_cust_id')->references('cust_id')->on('customers');

            $table->unsignedBigInteger('transaksi_tenant_id');
            $table->foreign('transaksi_tenant_id')->references('tenant_id')->on('tenants');

            $table->unsignedBigInteger('transaksi_item_id');
            $table->foreign('transaksi_item_id')->references('item_id')->on('items');

            // Foreign Key - End


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
