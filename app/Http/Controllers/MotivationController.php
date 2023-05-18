<?php

namespace App\Http\Controllers;

use App\Models\motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('creation_motivation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $liste = motivation::all();
        return view('liste_motivation',compact("liste"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            motivation::create(["intitule"=> $request->motivation
                               ]);
            DB::commit();
            return view("creation_motivation");
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
      
        try{
            DB::beginTransaction();
            motivation::find($request, $id)->update(['intitule' => $request->intitule]);
            DB::commit();
            return redirect("/motivation_liste");

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
            motivation::find($id)->delete();
            DB::commit();
            return redirect('/motivation_liste');
            
        }
        catch(\Throwable $th){
            dd($th);
            return back();
        }
    }
}
