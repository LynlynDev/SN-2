<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abonne=abonne::all();
        return response()->json($abonne,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nom' => 'required|max:100',
            'prenom' => 'required|max:100',
            'age' => 'required|max:2',
            'sexe' => 'required',
            'profession' => 'required|max:100',
            'rue' => 'required',
            'codePostal' => 'required|max:12',
            'ville' => 'required',
            'pays' => 'required',
            'tel'=> 'required|max:12',
            'email' => 'required|email|unique:abonne',
            


        ]);

        try {
            DB::beginTransaction();
        $abonne = abonne::create([
            //$id_region = Region::where('label',$request->session()->get('regions'))->first()->id,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'sexe'=>$request->sexe,
            'profession'=>$request->profession,
            'rue'=>$request->rue,
            'codePostal'=>$request->codePostal,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'tel'=>$request->tel,
            'email'=>$request->email,
        ]);
        DB::commit();
        return response()->json($abonne,201);//

        } catch (\Throwable $th) {
        dd($th);
        return response()->json("{'error: impossible de sauvegarder'}",404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, abonne $abonne, int $id_abonne)
    {
        try {
            //DB::beginTransaction();
            $abonne = abonne::find($id_abonne);
            $abonne->update($request->all());
            //DB::commit();

         response()->json("{'la modification a été effectuée avec succès",200);
            return $abonne;
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
            return response()->json("{'erreur de modification'}",404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(abonne $id_abonne)
    {
        try {
            DB::beginTransaction();
            abonne::find($id_abonne)->delete();
            DB::commit();
            return response()->json("{'suppression effectuée'}",200);
        } catch (\Throwable $error) {
            dd($error);
            return response()->json("{'erreur détectée'}",404);
            //throw $th;
        }
    }
}
