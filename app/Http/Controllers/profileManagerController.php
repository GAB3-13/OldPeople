<?php

namespace App\Http\Controllers;

use App\Models\individuals;

use Illuminate\Http\Request;

class profileManagerController extends Controller
{
    public function profileManager()
    {
        $approvedIndividuals = individuals::where('approved', 1)->get();
        $unapprovedIndividuals = individuals::where('approved', 0)->get();
        
        return view('adminpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
    } 

    public function updateStatus(Request $request){
        // dd($request->all());
        $individual = individuals::find($request->individualID); 
    
        if($individual){

            $individual->update(['approved' => 1]);
                return redirect()->route('profileManager')->with('success', 'Status updated successfully');
        }
    
        return redirect()->route('adminpages/profileManager')->with('error', 'Record not found');


}

public function unapproveupdateStatus(Request $request){
    // dd($request->all());
    $individual = individuals::find($request->individualID); 

    if($individual){

        $individual->update(['approved' => 0]);
            return redirect()->route('adminpages/profileManager')->with('success', 'Status updated successfully');
    }

    return redirect()->route('adminpages/profileManager')->with('error', 'Record not found');


}
}
