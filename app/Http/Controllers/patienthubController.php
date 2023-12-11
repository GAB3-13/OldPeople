<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\individuals;
use App\Models\rosters;

use Illuminate\Support\Carbon;


class patienthubController extends Controller
{
    public function hub()
    {    
        $today = Carbon::today();

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();

        $caregiverIndividuals = Individuals::where('roleID', 2)
            ->where('approved', 1)
            ->get(); 
    
        $doctorIndividuals = Individuals::where('roleID', 3)
            ->where('approved', 1)
            ->get(); 
    
        $supervisorIndividuals = Individuals::where('roleID', 5)
            ->where('approved', 1)
            ->get(); 
    
        // return view('adminpages/newroster', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));
        return view('patientpages/patientNavigation',compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));
    }  
}
