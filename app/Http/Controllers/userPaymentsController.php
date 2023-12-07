<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userpayments;


class userPaymentsController extends Controller
{
    public function userPayments (){
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }

        return view('adminpages/userpayments');
    }
}
