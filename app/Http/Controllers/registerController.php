<?php

namespace App\Http\Controllers;

use App\Models\registerUser;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function registerUser(Request $request)
    {    
        $individual = new registerUser();
        
    $individual->fName = $request->fName;
    $individual->lName = $request->lName;
    $individual->email = $request->email;
    $individual->phone = $request->phone;
    $individual->dob = $request->dob;
//this is what is going to be put into the tables 

//save the individual user
    $individual->save();

    // Optionally, you can return a response or redirect somewhere after the item is saved
    return redirect()->route('//loginUserRoute');
    }  
}
