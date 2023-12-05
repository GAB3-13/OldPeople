<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newRoster extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('roster.create');
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rosterDate' => 'required|date_format:m/d/Y',
            'supervisor' => 'required',
            'doctor' => 'required',
            'caregiver1' => 'required',
            'caregiver2' => 'required',
            'caregiver3' => 'required',
            'caregiver4' => 'required',
        ]);

        newRoster::create($validatedData);

        return redirect()->route('roster.create')->with('success', 'Roster created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
