<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individuals;
use App\Models\password;





class LoginController extends Controller
{
    public function login()
    {
        if(session_status() !== 1) {
            session_start();
        }
        $session = session('userID','');
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
                $type = Individuals::where('email', $data['email'])
                ->get('roleID');
                $request->session()->put(['userID' => $type]);
                return 'correct';
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

