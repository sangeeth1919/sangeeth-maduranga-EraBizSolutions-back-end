<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

class AppoimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appoiment = Appoiment::all();
        return [
            "status" => 1,
            "data" => $appoiment
        ];
    }

    public function getAppoimentByDoctor(Request $request)
    {

        $data=$request->all();

        $value=$data['value'];
        $doctor=$data['doctor'];
        $results = Appoiment::where('appoiment_date', $value)
        ->where('doctor_id', $doctor)
        ->first();
        return [
            "status" => 1,
            "available" => $results?false:true
        ];
    }


    public function makeAppoiment(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'date' => 'required',
            'doctor' => 'required'

        ]);

        $data=$request->all();

        $appoiment = Appoiment::create([
            'patient_name' => $data['name'],
            'patient_mobile' => $data['mobile'],
            'patient_email' => $data['email']?$data['email']:'-',
            'appoiment_date' => $data['date'],
            'doctor_id' => $data['doctor']
        ]);

        return [
            "status" => 1,
            "data" =>  $appoiment
        ];
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
    public function show(Appoiment $appoiment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appoiment $appoiment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appoiment $appoiment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appoiment $appoiment)
    {
        //
    }
}
