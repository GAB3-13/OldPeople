<?php

namespace App\Http\Controllers;

use App\Models\individuals;
use Illuminate\Http\Request;

class caregiverController extends Controller
{
    public function caregiverlogin(Request $request)
    {
        $patients = individuals::where('roleID', 1)->where('approved', 1)->get();
        return view('caregiverpages/caregiverNavigation', compact('patients'));
    }
}
