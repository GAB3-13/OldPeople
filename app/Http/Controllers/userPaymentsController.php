<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userPaymentsController extends Controller
{
    public function userPayments (){

        return view('adminpages/userpayments');
    }
}
