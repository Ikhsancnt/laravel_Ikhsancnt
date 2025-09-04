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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
