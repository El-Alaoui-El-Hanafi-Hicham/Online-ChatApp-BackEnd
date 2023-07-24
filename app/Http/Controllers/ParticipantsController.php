<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use App\Http\Requests\StoreParticipantsRequest;
use App\Http\Requests\UpdateParticipantsRequest;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Participants::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParticipantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function show( $participants)
    {
        return Participants::with('Conversation')->with('User')->find('$participants');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function edit(Participants $participants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantsRequest  $request
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantsRequest $request, Participants $participants)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participants $participants)
    {
        //
    }
}
