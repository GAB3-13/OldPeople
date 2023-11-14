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
            $table->foreign('roleID')->references('id')->on('roles');
            $table->string('fName', 30);
            $table->string('lName', 30);
            $table->string('email', 255);
            $table->string('phone', 12);
            $table->date('dob');
            $table->timestamps();
        });

        // passwords table
        Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->string('password', 255);
            $table->timestamps();
        });

        // AddPasswordForeignKeyToIndividualsTable
        // Schema::table('individuals', function (Blueprint $table) {
        //     $table->foreign('individualID')->references('individualID')->on('passwords');
        // });

        // roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->id('roleID');
            $table->string('roleName', 20);
            $table->timestamps();
        });

        // salaries table
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->integer('salary');
            $table->timestamps();
        });

        // patients table
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patientID');
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('careGroup');
            $table->foreign('careGroup')->references('id')->on('care_groups');
            $table->date('admissionDate');
            $table->string('morningMed', 255)->nullable();
            $table->string('afternoonMed', 255)->nullable();
            $table->string('nightMed', 255)->nullable();
            $table->timestamps();
        });

        // payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->unsignedBigInteger('patientID');
            $table->foreign('patientID')->references('patientID')->on('patients');
            $table->integer('totalDue');
            $table->integer('payments');
            $table->timestamps();
        });

        // emergency_contacts table
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->id('emergencyContactID');
            $table->unsignedBigInteger('patientID');
            $table->foreign('patientID')->references('patientID')->on('patients');
            $table->integer('familyCode');
            $table->string('emergencyContact', 255);
            $table->string('relation', 20);
            $table->timestamps();
        });

        // approvals table
        Schema::create('approvals', function (Blueprint $table) {
            $table->id('approvalID');
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->string('role', 255);
            $table->timestamps();
        });

        // doctor_appointments table
        Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->unsignedBigInteger('doctorID');
            $table->foreign('doctorID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('patientID');
            $table->foreign('patientID')->references('patientID')->on('patients');
            $table->date('scheduleDate');
            $table->date('seenDate')->nullable();
            $table->string('comment', 255)->nullable();
            $table->string('newComment', 255)->nullable();
            $table->timestamps();
        });

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

        // supervisors table
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id('supervisorID');
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->timestamps();
        });

        // caregivers table
        Schema::create('caregivers', function (Blueprint $table) {
            $table->id('caregiverID');
            $table->unsignedBigInteger('individualID');
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('careGroupID');
            $table->foreign('careGroupID')->references('careGroupID')->on('care_groups');
            $table->timestamps();
        });

        // rosters table
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('rosterID');
            $table->unsignedBigInteger('supervisorID');
            $table->foreign('supervisorID')->references('supervisorID')->on('supervisors');
            $table->unsignedBigInteger('doctorID');
            $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->unsignedBigInteger('caregiverID');
            $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
            $table->timestamps();
        });

        // home_care table
        Schema::create('home_care', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->unsignedBigInteger('doctorID');
            $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->date('appointmentDate');
            $table->unsignedBigInteger('caregiverID');
            $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
            $table->string('morningMeds', 255)->nullable();
            $table->string('afternoonMeds', 255)->nullable();
            $table->string('nightMeds', 255)->nullable();
            $table->char('breakfast', 1)->nullable();
            $table->char('lunch', 1)->nullable();
            $table->char('dinner', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop tables in reverse order to avoid foreign key constraint issues
        Schema::dropIfExists('home_care');
        Schema::dropIfExists('rosters');
        Schema::dropIfExists('caregivers');
        Schema::dropIfExists('supervisors');
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('doctor_appointments');
        Schema::dropIfExists('approvals');
        Schema::dropIfExists('emergency_contacts');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('patients');
        Schema::dropIfExists('salaries');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('passwords');
        Schema::dropIfExists('individuals');
    }
};
