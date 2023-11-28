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
                    // Redirect based on roleID
                    switch ($individual->roleID) {
                        case 1: // Patient
                            return redirect()->route('patient.dashboard');
                            break;
                        case 2: // Caregiver
                            return redirect()->route('caregiver.dashboard');
                            break;
                        case 3: // Doctor
                            return redirect()->route('doctor.dashboard');
                            break;
                        case 4: // Family Member
                            return redirect()->route('family.dashboard');
                            break;
                        case 5: // Supervisor
                            return redirect()->route('supervisor.dashboard');
                            break;
                        case 6: // admin
                            return redirect()->route('admin.dashboard');
                            break;
                        default:
                            return 'Unknown role';
                            break;
                    }
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

