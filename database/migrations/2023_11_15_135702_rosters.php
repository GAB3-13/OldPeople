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
        // rosters table
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('rosterID');
            $table->unsignedBigInteger('supervisorID');
            // $table->foreign('supervisorID')->references('supervisorID')->on('supervisors');
            $table->unsignedBigInteger('doctorID');
            // $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->unsignedBigInteger('caregiverID');
            // $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
