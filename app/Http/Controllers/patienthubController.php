<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patienthubController extends Controller
{
    public function hub()
    {    
        return view(('patientpages/patientNavigation'));
    }  
}
