<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salariesController extends Controller
{
    public function salaries(){
        return view('adminpages/salaries');
    }
}
