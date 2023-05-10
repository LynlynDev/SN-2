<?php

namespace App\Http\Controllers;

use App\vote;
use \App\bulletin;
use \App\participant;
use \App\election;
use Illuminate\Http\Request;

class VoteController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vote $vote)
    {
        //
    }

    public function countVotes($participantId, $bulletinId, $electionId)
    {
        try {
            $participant = participant::find($participantId);
            $bulletin = bulletin::find($bulletinId);
            $election = election::find($electionId);
    
            if ($participant && $bulletin && $election) {
                $votes = $bulletin->votes()
                    ->where('id_participant', $participant->id)
                    ->where('id_election', $election->id)
                    ->count();
    
                return response()->json(['votes' => $votes]);
            }
        }catch (\Throwable $th){
            return response()->json(['error' => 'Participant, bulletin, or election not found']. $th,404);
        }
    }
}
