<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supervisorController extends Controller
{
    public function supervisorlogin()
    {    
        return view('supervisorpages/supervisorNavigation');
    }  }
