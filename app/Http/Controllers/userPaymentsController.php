<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userpayments;


class userPaymentsController extends Controller
{
    public function userPayments (){

        return view('adminpages/userpayments');
    }
}
