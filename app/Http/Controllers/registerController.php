<?php

namespace App\Http\Controllers;

use App\Models\individuals;
use App\Models\patients;
use App\Models\emergencyContact;
use App\Models\password;

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

        // Store data into the respective tables using the models
        $individual =individuals::create([
            'fName' => $data['fName'],
            'lName' => $data['lName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'roleID' =>$data['roleID']
        ]);

        $individualID = $individual->id;

        password::create([
            'individualID'=>$individualID,
            'password' =>$data['password']

        ]);

        

        if($data['roleID']== 1){
            
            $patients = patients::create([
                'individualID' => $individualID,
                'careGroupID' => null,
                'admissionDate'=> null
            ]);

            $patientID = $patients->patientID;

            emergencyContact::create([
                'patientID'=>$patientID,
                'familyCode'=>$data['familyCode'],
                'emergencyContact'=>$data['emergencyContact'],
                'relation'=>$data['ecRelationship']
            ]);



        }

        //we need to input tthe information from the form into the individuals 
        //table the password table and if its a patient then also need to be added to the emergency and patient 
  

    // Optionally, you can return a response or redirect somewhere after the item is saved
    return redirect()->route('login');
    }  
}
