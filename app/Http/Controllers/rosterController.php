<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rosters;
use Illuminate\Support\Carbon;
use App\Models\individuals;

class rosterController extends Controller
{
    public function roster()
   
        {
            if (session()->has('userID') && session()->has('roleID')) {
                $userID = session('userID');
                $roleID = session('roleID');
    
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
        
            return view('supervisorpages/roster', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));
    
        } 
        
        
        else {
     
            return redirect('/login');
        }
        }
    
}
