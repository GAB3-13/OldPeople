<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rosters;
class setAppointmentController extends Controller
{
    public function setAppointment(){
        return view('patientpages/setAppointment');
    }

    public function search(Request $request){
        // dd($request);

        $setRosters = Rosters::whereDate('rosterDate', $request->rosterDate)
        ->get();



    return view('patientpages/setAppointment',compact('setRosters'));
    }
}
