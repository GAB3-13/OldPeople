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
        // payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->unsignedBigInteger('patientID');
            // $table->foreign('patientID')->references('patientID')->on('patients');
            $table->integer('totalDue');
            $table->integer('payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
