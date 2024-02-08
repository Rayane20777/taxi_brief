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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('id_driver');
            $table->string('description')->nullable();
            $table->string('plateNumber')->nullable();
            $table->string('vehicleType')->nullable();
            $table->string('location')->nullable();
            $table->enum('statue', ['1', '0'])->default('0');
            $table->string('paymentType')->nullable();
            $table->foreignId('id_user')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
