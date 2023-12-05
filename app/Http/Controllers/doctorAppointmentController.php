<?php

namespace App\Http\Controllers;

use App\Models\doctorAppointment;
use App\Models\individuals;
use Illuminate\Http\Request;

class doctorAppointmentController extends Controller
{
    public function doctorAppointment() {
        $dates = doctorAppointment::all();
        $doctors = individuals::where('roleID', 3)
        ->where('approved', 1)
        ->get();
        return view('doctorAppointment', compact('doctors', 'dates'));
    }

    public function getAppointments() {
        $appointnemts = doctorAppointment::all();
        return $appointnemts;
    }

    public function getDoctor(Request $request) {
        $doctors = individuals::where('individualID', $request->doctorID)
        ->get();
            return response()->json($doctors);
    }

    public function getPatient(Request $request) {
        $patient = individuals::where('individualID', $request->doctorID)
        ->get();
            return response()->json($patient);
    }

    // public function getDoctor(Request $request)
    // {
    //     $getDate = $request->select('date');
    //     echo $getDate;

    //     $doctors = individuals::where('roleID', 3)
    //     ->where('approved', 1)
    //     ->where()
    //     ->get();
    //     return view('/doctorAppointmennt', compact('doctors'));
    // }


}
