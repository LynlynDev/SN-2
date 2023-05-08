<?php

namespace App\Http\Controllers\REST;

use \App\Http\Controllers\Controller;
use \App\RegionModel; 
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regionModel = RegionModel::all();
        return response()->json($regionModel);
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
        $regionModel = RegionModel::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "region Created successfully!",
            'regionModel' => $regionModel
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(RegionModel $regionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegionModel $regionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, Request $request, RegionModel $regionModel)
    {
        try {
            $regionModel = RegionModel::find($id);
            $regionModel ->update($request->all());
    
            return response()->json('{"Modification réussie"}',200);
            }catch(\Throwable $th){
                return response()->json('{"error":"Impossible de modifier"}'.$th,404);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
        $regionModel = RegionModel::find($id);
        $regionModel ->delete();

        return response()->json(['message'=>'Region supprimée avec success']);
        }catch(\Throwable $th){
            return response()->json('{"error":"Opération échouée"}'.$th,404);
        }
    }
}
