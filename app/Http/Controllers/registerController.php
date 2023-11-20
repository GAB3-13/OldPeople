<?php

namespace App\Http\Controllers;

use App\Models\individuals;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register()
    {    
        return view(('register'));
    }  

    public function registerUser(Request $request)
    {    
        $data = $request->all();
        // dd($data);
        // Store data into the respective tables using the models
        individuals::create([
            'fName' => $data['fName'],
            'lName' => $data['lName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'roleID' =>$data['roleID']
        ]);

        patients::create([
//make a new patient if 
        ]);
  

    // Optionally, you can return a response or redirect somewhere after the item is saved
    return redirect()->route('//login');
    }  
}
