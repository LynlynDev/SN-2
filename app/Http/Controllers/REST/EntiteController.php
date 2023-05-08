<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\entite;
use Illuminate\Http\Request;

class EntiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(entite $entite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entite $entite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            //DB::beginTransaction();
            $id = entite::find($id);
            $id->update($request->all());
            //DB::commit();

         response()->json("{'la modification a été effectuée avec succès",200);
            return $id;
        } catch (\Throwable $error) {
            dd($error);
            //throw $th;
            return response()->json("{'erreur de modification'}",404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entite $id)
    {
        try {
            DB::beginTransaction();
            entite::find($id)->delete();
            DB::commit();
            return response()->json("{'suppression effectuée'}",200);
        } catch (\Throwable $error) {
            dd($error);
            return response()->json("{'erreur détectée'}",404);
            //throw $th;
        }
    }
}
