<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorAppointment extends Controller
{
    public function doctorAppointment()
    {    
        return view(('doctorAppointment'));
    }  
}
