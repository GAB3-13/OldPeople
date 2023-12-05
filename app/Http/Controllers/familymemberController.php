<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class familymemberController extends Controller
{
    public function familymemberlogin()
    {
        return view('familymember/familymemberNavigation');
    }
}
