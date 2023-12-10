<?php

namespace App\Http\Controllers;
use App\Models\home_care;
use App\Models\individuals;
use Illuminate\Http\Request;

class caregiverController extends Controller
{
    public function caregiverlogin(Request $request)
    {
        $caregiverPatients = home_care::join('patients', 'patients.patientID', '=', 'home_care.patientID')
        ->join('individuals', 'individuals.individualID', '=', 'patients.individualID')
        ->where('approved', 1)
        ->get();

        $caregiverInformation = individuals::where('individualID', session('userID'))
        ->get();
        return view('caregiverpages/caregiverNavigation', ['cgI' => $caregiverInformation])
        // ->with(compact('caregiverInformation'))
        ->with(compact('caregiverPatients'));
    }

    public function createCheckUpdate(Request $request)
    {
        $data = $request->all();

        return redirect() -> route('caregiverlogin') ->with(compact('data'));
    }
}
