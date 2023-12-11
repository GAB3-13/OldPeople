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
        // home_care table
        Schema::create('home_care', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->unsignedBigInteger('patientID')->nullable();
            // $table->foreign('patientID')->references('patientID')->on('patient');
            $table->unsignedBigInteger('doctorID')->nullable();
            // $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->date('appointmentDate')->nullable();
            $table->unsignedBigInteger('caregiverID');
            // $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
            $table->string('morningMeds', 255)->nullable();
            $table->string('afternoonMeds', 255)->nullable();
            $table->string('nightMeds', 255)->nullable();
            $table->char('breakfast', 255)->nullable();
            $table->char('lunch', 255)->nullable();
            $table->char('dinner', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_care');
    }
};
