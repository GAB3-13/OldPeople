<?php

namespace App\Http\Controllers;
use App\Models\salaries;
use App\Models\individuals;
use Illuminate\Http\Request;

class salariesController extends Controller
{
    public function salaries()
{
    $caregiverIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 2)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);
       
      

    $doctorIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 3)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);

    $supervisorIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 5)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);

        // dd($caregiverIndividuals,$doctorIndividuals,$supervisorIndividuals);

    return view('adminpages.salaries', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals'));
}

    public function updateSalary(Request $request)
    {
        // dd($request->all());

        $individualID = substr($request->input('individualID'), 10); // Extract individualID from input name
        // dd($individualID);
        // $roleID = $request->input('roleID');
        $newSalary = $request->input('individual' . $individualID . 'Salary');

        salaries::updateOrCreate(
            ['individualID' => $individualID],
            ['salary' => $newSalary]
        );

        return redirect()->back()->with('success', 'Salary updated successfully');
    }
}
