<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\rosters;
use Illuminate\Support\Carbon;

class patientController extends Controller
{
    public function patientlogin()
    {    
        $today = Carbon::today();

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();



        return view('patientpages/patientNavigation',compact('setRosters'));
    }  
}
