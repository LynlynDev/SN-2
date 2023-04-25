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
        return view('creation_region');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $liste = RegionModel::all();
        return view('liste_region',compact("liste")); //le liste_region ici est le formulaire en question
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
            return view("creation_region");
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
        // try{
        //     DB::beginTransaction();
        //     $reg = RegionModel::find($id);
        //     DB::commit();
        //     return view("update_region", compact("reg"));  //le update_region ici est le formulaire en question
            
        // }
        // catch(\Throwable $th){
        //     return back();
        // }
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            DB::beginTransaction();
            RegionModel::find($request, $id)->update(['label' => $request->label]);
            DB::commit();
            return redirect("/region_liste");

        }catch(\Throwable $th){
            return back();
        }
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
