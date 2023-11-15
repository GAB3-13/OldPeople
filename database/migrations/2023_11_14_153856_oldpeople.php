<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // individuals table
        Schema::create('individuals', function (Blueprint $table) {
            $table->id('individualID');
            $table->unsignedBigInteger('roleID');
            // $table->foreign('roleID')->references('id')->on('roles');
            $table->string('fName', 30);
            $table->string('lName', 30);
            $table->string('email', 255);
            $table->string('phone', 12);
            $table->date('dob');
            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop tables in reverse order to avoid foreign key constraint issues
        Schema::dropIfExists('individuals');
    }
};
