<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individuals;
use App\Models\password;





class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(!empty(session('roleID'))){
            $request->session()->flush();
        }
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
                $role = Individuals::where('email', $data['email'])
                ->get('roleID');
                $user = Individuals::where('email', $data['email'])
                ->get('individualID');
                $request->session()->put(['roleID' => $role]);
                $request->session()->put(['individualID' => $user]);
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

