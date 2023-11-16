<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        //individuals
        Schema::table('individuals', function (Blueprint $table) {
            $table->foreign('roleID')->references('roleID')->on('roles');
        });

//passwords
        Schema::table('passwords', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

        //salaries
        Schema::table('salaries', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });
//patients

        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->foreign('careGroup')->references('id')->on('care_groups');

        });
//payments
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('patientID')->references('patientID')->on('patients');
        });
//emergency_contacts
        Schema::table('emergency_contacts', function (Blueprint $table) {
            $table->foreign('patientID')->references('patientID')->on('patients');
        });
//approvals
        Schema::table('approvals', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });
//doctor_appointments
        Schema::table('doctor_appointments', function (Blueprint $table) {
            $table->foreign('doctorID')->references('individualID')->on('individuals');
            $table->foreign('patientID')->references('patientID')->on('patients');

        });

//doctors
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

//supervisors
        Schema::table('approvals', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
        });

//caregivers
        Schema::table('caregivers', function (Blueprint $table) {
            $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->foreign('careGroupID')->references('careGroupID')->on('care_groups');
        
        });
//rosters
        Schema::table('rosters', function (Blueprint $table) {
            $table->foreign('supervisorID')->references('supervisorID')->on('supervisors');
            $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
        });

        //home_care
        Schema::table('home_care', function (Blueprint $table) {
             $table->foreign('patientID')->references('patientID')->on('patient');
             $table->foreign('doctorID')->references('doctorID')->on('doctors');
             $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
        });
    }


    public function down()
    {
        Schema::table('individuals', function (Blueprint $table) {
            $table->dropForeign(['roleID']);
        });

        //passwords
        Schema::table('passwords', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
        });

        //salaries
        Schema::table('salaries', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
        });

        //patients
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
            $table->dropForeign(['careGroup']);

        });
        //payments
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['patientID']);
        });
        //emergency_contacts
        Schema::table('emergency_contacts', function (Blueprint $table) {
            $table->dropForeign(['patientID']);
        });
        //approvals
        Schema::table('approvals', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
        });
        //doctor_appointments
        Schema::table('doctor_appointments', function (Blueprint $table) {
            $table->dropForeign(['doctorID']);
            $table->dropForeign(['patientID']);
        });
        //doctors
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
        });
        //supervisors
        Schema::table('approvals', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
        });
        //caregivers
        Schema::table('caregivers', function (Blueprint $table) {
            $table->dropForeign(['individualID']);
            $table->dropForeign(['careGroupID']);
        });
        //rosters
        Schema::table('rosters', function (Blueprint $table) {
            $table->dropForeign(['supervisorID']);
            $table->dropForeign(['doctorID']);
            $table->dropForeign(['caregiverID']);
        });
        //home_care
        Schema::table('home_care', function (Blueprint $table) {
            $table->dropForeign(['patientID']);
            $table->dropForeign(['doctorID']);
            $table->dropForeign(['caregiverID']);
       });

    
    }
};

