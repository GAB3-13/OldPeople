<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    public function patientlogin()
    {    
        return view(('patientpages/patientNavigation'));
    }  
}
