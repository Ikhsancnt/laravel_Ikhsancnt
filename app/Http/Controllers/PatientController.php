<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Patient::with('hospital')->latest()->get();
        $hospital = Hospital::all();
        return view('Patients.index', compact('patient', 'hospital'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospital = Hospital::all();
        return view('patients.create', compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'number_phone' => 'required|string|max:20',
            'id_hospital' => 'required|exists:hospitals,id',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')
                         ->with('success', 'Patient data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::with('hospital')->findOrFail($id);
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        $hospital = Hospital::all();
        return view('patients.edit', compact('patient', 'hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'patient' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'number_phone' => 'required|string|max:20',
            'id_hospital' => 'required|exists:hospitals,id',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());

        return redirect()->route('patients.index')
                         ->with('success', 'Patient data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(patient $patient)
    {
        $patient->delete();
        return response()->json(['success' => 'Data Pasien berhasil dihapus.']);
    }

    public function filter(Request $request)
    {
        $id_hospital = $request->id_hospital;

        $query = Patient::with('hospital');

        if ($id_hospital != 'all') {
            $query->where('id_hospital', $id_hospital);
        }

        $patients = $query->get();

        return view('patients.partials.table', compact('patients'))->render();
    }
}
