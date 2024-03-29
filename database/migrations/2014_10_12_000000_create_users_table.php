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
        Schema::create('users', function (Blueprint $table) {
            // Primary Key - Start
            $table->id();
            // Primary Key - End

            // Attributes
            $table->string('username', 45);
            $table->string('password');
            $table->string('ulangi_pass');
            // Deleting unique() for using the same email for each account
            $table->string('email');
            $table->enum('role', ['customer','tenant', 'admin'])->default('customer');
            $table->string('foto')->nullable();
            $table->boolean('isActive')->default(0);
            $table->bigInteger('balance')->default(0)->nullable();

            // Default Atributes
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
