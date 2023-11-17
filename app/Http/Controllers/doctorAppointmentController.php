<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorAppointmentController extends Controller
{
    public function doctorAppointment()
    {    
        return view(('doctorAppointment'));
    }  
}
