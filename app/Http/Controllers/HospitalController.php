<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospital = Hospital::latest()->paginate(10);
        return view('hospitals.index', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hospital' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'email' => 'required|email|max:255|unique:hospitals,email',
            'telephone' => 'required|string|max:20',
        ]);

        Hospital::create($request->all());

        return redirect()->route('hospitals.index')
                         ->with('success', 'Hospital data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospitals.index')
                         ->with('success', 'Hospital data deleted successfully.');
    }
}
