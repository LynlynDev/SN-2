<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\bulletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bulletin = bulletin::all();
        return response()->json($bulletin, 200);
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
        $this->validate($request, [
            'couleur' => 'required|max:100',
            'photo' => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $bulletin = bulletin::create([
                'couleur' => $request->couleur,
                'photo' => $request->photo,
            ]);
            DB::commit();
            return response()->json($bulletin, 201);
        } catch (\Throwable $th) {
            return response()->json("{'error: Imposible de sauvegarder une bulletin'}", 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(bulletin $bulletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bulletin $bulletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bulletin $id)
    {
        try {
            $bulletin = bulletin::find($id);
            $bulletin->update($request->all());
            response()->json("{'Modification du bulletin réussie'}", 200);
            return $bulletin;
        } catch (\Throwable $error) {
            return response()->json("{'error: Imposible de mettre a jour le bulletin'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bulletin $id)
    {
        try {
            $bulletin = bulletin::find($id);
            $bulletin->delete();
            return response()->json("{'Suppresion réussie du bulletin'}", 200);
        } catch (\Throwable $error) {
            return response()->json("{'error: Imposible de supprimé le bulletin'}", 404);
        }
    }
}
