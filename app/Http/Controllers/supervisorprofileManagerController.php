<?php

namespace App\Http\Controllers;

use App\Models\individuals;

use Illuminate\Http\Request;

class supervisorprofileManagerController extends Controller
{
    public function profileManagerr()
    {
        if (empty(session('roleID')) || (session('roleID') != 6 && session('roleID') != 5)) {
            return redirect('/login');
        }
    
        if (session('roleID') == 6) {
            $approvedIndividuals = individuals::where('approved', 1)->get();
            $unapprovedIndividuals = individuals::where('approved', 0)->get();
            return view('adminpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
        } else {
            $approvedIndividuals = individuals::where('approved', 1)->whereNotIn('roleID', [6])->get();
            $unapprovedIndividuals = individuals::where('approved', 0)->whereNotIn('roleID', [6])->get();
            return view('supervisorpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
        }
    }
    

    public function updateStatus(Request $request)
    {


        $individual = individuals::find($request->individualID);
        if($individual){

            $individual->update(['approved' => 1]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Record not found');
    }

    public function unapproveupdateStatus(Request $request)
    {


        $individual = individuals::find($request->individualID);

        if ($individual) {

            $individual->update(['approved' => 0]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Record not found');
    }
}
