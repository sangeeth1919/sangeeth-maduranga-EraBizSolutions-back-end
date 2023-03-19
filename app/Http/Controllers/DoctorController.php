<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return [
            "status" => 1,
            "data" => $doctors
        ];
    }

    public function filterDoctor(Request $request)
    {
        $allKey=$request->all();
        $nameKey=!empty($allKey['name'])?$allKey['name']:null;
        $country=!empty($allKey['country'])?$allKey['country']:null;
        $distric=!empty($allKey['distric'])?$allKey['distric']:null;


        $sql = DB::table('doctors');

        if($nameKey){
            $sql->where(DB::raw("CONCAT(`firstName`, ' ', `lastName`)"), "LIKE", "%$nameKey%");
        }
        if($country){
            $sql->where(DB::raw("country"), "=", "$country");
        }
        if($distric){
            $sql->where(DB::raw("distric"), "=", "$distric");
        }
        //->where(DB::raw('concat("first_name","last_name")'), "like", "%$searchInput%")


        $doctors= $sql->get();
        return [
            "status" => 1,
            "data" => $doctors
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
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
