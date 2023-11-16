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
        // patients table
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patientID');
            $table->unsignedBigInteger('individualID');
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('careGroupID');
            // $table->foreign('careGroupID')->references('careGroupID')->on('caregroup');
            $table->date('admissionDate');
            $table->string('morningMed', 255)->nullable();
            $table->string('afternoonMed', 255)->nullable();
            $table->string('nightMed', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
