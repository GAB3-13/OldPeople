<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rosterController extends Controller
{
    public function roster()
    {    
        return view('supervisorpages/roster');
    }
}
