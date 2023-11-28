<?php

namespace App\Http\Controllers;

use App\Models\individuals;

use Illuminate\Http\Request;

class profileManagerController extends Controller
{
    public function profileManager()
    {    
        $individual = individuals::all(); 

        return view('adminpages/profilemanager', compact('individual'));
    }  
    public function updateStatus(Request $request, $id){
        $individual = individuals::find($id); // Retrieve the specific record based on the provided ID
    
        if($individual){

            $individual->update(['approved' => 1]);
                return redirect()->route('profile-manager')->with('success', 'Status updated successfully');
        }
    
        return redirect()->route('profile-manager')->with('error', 'Record not found');


}
}
