<?php

namespace App\Http\Controllers;
use App\Models\salaries;
use App\Models\individuals;
use Illuminate\Http\Request;

class salariesController extends Controller
{
    public function salaries()
{
    // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
    //     return redirect('/login');
    // }
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

    return view('adminpages.salaries', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals'));
}

    public function updateSalary(Request $request)
    {
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }

        $individualID = substr($request->input('individualIDd'), 10); // for doctors
        // OR
        $individualID = substr($request->input('individualIDc'), 10); // for caregivers
        // OR
        $individualID = substr($request->input('individualIDs'), 10); // for supervisors
                $newSalary = $request->input('individual' . $individualID . 'Salary');
dd($individualID,$newSalary);
        salaries::updateOrCreate(
            ['individualID' => $individualID],
            ['salary' => $newSalary]
        );

        return redirect()->back()->with('success', 'Salary updated successfully');
    }
}
