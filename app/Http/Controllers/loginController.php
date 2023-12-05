<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individuals; 
use App\Models\password; 


class LoginController extends Controller
{
    public function login()
    {    
        return view('login');
    }  

    public function validateLogin(Request $request)
{
    $data = $request->all();
    
    $individual = Individuals::where('email', $data['email'])->first();

    if ($individual) {
        $savedPassword = Password::where('individualID', $individual->individualID)->first();

        if ($savedPassword) {
            $passwordMatch = $savedPassword->password === $data['password'];

            if ($passwordMatch) {
                return 'good'; 
            } else {
                return 'Incorrect password';
            }
        } else {
            return 'Password not found';
        }
    } else {
        return 'Email not registered';
    }
}

}

