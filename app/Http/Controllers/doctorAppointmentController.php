<?php

namespace App\Http\Controllers;

use App\Models\doctorAppointment;
use App\Models\individuals;
use Illuminate\Http\Request;

class doctorAppointmentController extends Controller
{
    public function doctorAppointment(Request $request)
    {

        $dates = doctorAppointment::all();
        $doctors = individuals::join('doctor_Appointments', 'doctorID', '=', 'individualID')
            ->where('roleID', 3)
            ->where('approved', 1)
            ->get();
            $maybeHoping = session('roleID');
            if(empty($maybeHoping) == 1) {
                return redirect('/login');
            }
            // $maybeHoping = intval(substr(str($maybeHoping[0]),10,1));
            // $maybeHoping = session('roleID');
            // echo str($maybeHoping[0]);
            // echo $maybe = $request->session()->pull('userID');
            // echo $maybe;
            echo "</br>".$maybeHoping;

        return view('doctorAppointment', compact('doctors', 'dates'));
    }

    public function getAppointments()
    {
        $appointnemts = doctorAppointment::all();
        return $appointnemts;
    }

    public function getDoctor(Request $request)
    {
        $doctors = individuals::where('individualID', $request->doctorID)
            ->get();
        return response()->json($doctors);
    }

    public function getPatient(Request $request)
    {
        $patient = individuals::where('individualID', $request->patientID)
            ->get();
        return response()->json($patient);
    }


    // public function getDoctor(Request $request)
    // {
    //     $getDate = $request->select('date');

    //     $doctors = individuals::where('roleID', 3)
    //     ->where('approved', 1)
    //     ->where()
    //     ->get();
    //     return view('/doctorAppointmennt', compact('doctors'));
    // }

    // public function patientLookup()
    // {

    //     // $individual = individuals::find($request->individualID);
    //     // if ($individual) {

    //     // }
    // }
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
