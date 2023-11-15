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
        // doctors table
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('doctorID');
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->string('name', 255);
            $table->string('specialization', 255);
            $table->string('qualification', 255);
            $table->string('license_number', 20);
            $table->string('contact_number', 15);
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
