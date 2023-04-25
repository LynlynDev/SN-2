<?php

namespace App\Http\Controllers;

use App\participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $participant = Participant::all();
        return response()->json([
            'status' => true,
            'participant' => $participant
        ]);
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
        $participant = Participant::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "participant Created successfully!",
            'participant' => $participant
        ], 200);
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
    public function update(Request $request, participant $participant)
    {
        $participant->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "participant Updated successfully!",
            'participant' => $participant
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(participant $participant)
    {
        $participant->delete();

        return response()->json([
            'status' => true,
            'message' => "participant Deleted successfully!",
        ], 200);
    }
}
