<?php

namespace App\Http\Controllers;

use App\Models\doctorAppointment;
use App\Models\individuals;
use Illuminate\Http\Request;

class doctorAppointmentController extends Controller
{
    public function doctorAppointment()
    {
        // return view(('doctorAppointment'));
        $dates = doctorAppointment::all();
        $doctors = individuals::where('roleID', 3)
        ->where('approved', 1)
        ->get();
        return view('doctorAppointment', compact('doctors', 'dates'));

        // $approvedIndividuals =  individuals::where('approved', 1)->get();
    }

    public function getDoctor(Request $request)
    {
        $getDate = $request->select('date');

        $doctors = individuals::where('roleID', 3)
        ->where('approved', 1)
        ->where()
        ->get();
        return view('/doctorAppointmennt', compact('doctors'));
    }

    // public function patientLookup()
    // {

    //     // $individual = individuals::find($request->individualID);
    //     // if ($individual) {

    //     // }
    // }
}
