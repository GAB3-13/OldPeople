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
        // caregivers table
        Schema::create('caregivers', function (Blueprint $table) {
            $table->id('caregiverID');
            $table->unsignedBigInteger('individualID');
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('careGroupID');
            // $table->foreign('careGroupID')->references('careGroupID')->on('care_groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregivers');
    }
};
