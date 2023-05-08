<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participant=Participant::all();
        return response()->json($participant,200);//
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
        $this->validate($request,
        [
            'nom' => 'required|max:100',
            'num_cni' => 'required|max:20',
            'age' => 'required|max:2',
            'sexe' => 'required',
            'login' => 'required|max:100',
            'email' => 'required|email|unique:participant',
            'pwd' => 'required|max:12',
            'tel'=> 'required|max:12',
            'id_region' => 'required',

        ]);

        try {
            DB::beginTransaction();
        $participant = participant::create([
            //$id_region = Region::where('label',$request->session()->get('regions'))->first()->id,
            'nom'=>$request->nom,
            'num_cni'=>$request->num_cni,
            'age'=>$request->age,
            'sexe'=>$request->sexe,
            'login'=>$request->login,
            'email'=>$request->email,
            'pwd'=>Hash::make($request->pwd),
            'tel'=>$request->tel,
            'id_region'=>$request->id_region,

        ]);
        DB::commit();
        return response()->json($participant,201);//

        } catch (\Throwable $th) {
        dd($th);
        return response()->json("{'error: impossible de sauvegarder'}",404);
        }//
    }

    /**
     * Display the specified resource.
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, participant $id)
    {
        try {
            //DB::beginTransaction();
            $participant = participant::find($id);
            $participant->update($request->all());
            //DB::commit();

         response()->json("{'la modification a été effectuée avec succès",200);
            return $participant;
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
            return response()->json("{'erreur de modification'}",404);
        }//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(participant $id)
    {
        try {
            DB::beginTransaction();
            participant::find($id)->delete();
            DB::commit();
            return response()->json("{'suppression effectuée'}",200);
        } catch (\Throwable $error) {
            dd($error);
            return response()->json("{'erreur détectée'}",404);
            //throw $th;
        }//
    }

    public function OnOff($id){
        try {
            DB::beginTransaction();
            $participant = Participant::find($id);
            $participant->etat =!($participant->etat);
            $participant->update();
            DB::commit();
            return response()->json("{'opération réussie'}",200);

        } catch (\Throwable $th) {
            return response()->json("{echec de l'opération". $th,404);
            //throw $th;
        }

    }
}
