<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNavigationController extends Controller
{
    public function adminNavigation()
    {
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }
        return view(('adminNavigation'));
    }
}
