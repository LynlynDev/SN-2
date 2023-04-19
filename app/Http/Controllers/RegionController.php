<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\RegionModel;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulaire_region');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $liste = RegionModel::all();
        return view('liste_region',compact("liste"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
            DB::beginTransaction();
            RegionModel::create(["label"=> $request->region]);
            DB::commit();
           //$liste = RegionModel::all();
            return view("formulaire_region");
        }
        catch(\Throwable $e){
            return back();
        }
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
    public function destroy(string $id)
    {
        
        try{
            DB::beginTransaction();
            RegionModel::find($id)->delete();
            DB::commit();
            return redirect('/region_liste');
            
        }
        catch(\Throwable $th){
            dd($th);
            return back();
        }
    }
}
