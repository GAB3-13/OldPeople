<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caregiverController extends Controller
{
    public function caregiverlogin()
    {    
        return view(('caregiverpages/caregiverNavigation'));
    }  
}
