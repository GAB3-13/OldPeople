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
        // emergency_contacts table
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->id('emergencyContactID');
            $table->unsignedBigInteger('patientID');
            // $table->foreign('patientID')->references('patientID')->on('patients');
            $table->integer('familyCode');
            $table->string('emergencyContact', 255);
            $table->string('relation', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_contacts');
    }
};
