<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNavigationController extends Controller
{
    public function adminNavigation()
    {
        return view(('adminNavigation'));
    }
}
