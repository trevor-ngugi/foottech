<?php

namespace App\Http\Controllers;

use App\Models\Scout;
use Illuminate\Http\Request;

class ScoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all scouts
        $scouts= Scout::all(); //fetch all blog posts from DB
        return view('scout.index', [
            'scouts' => $scouts,
        ]); //returns the view with posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newscout = Scout::create([
            'scout_name' => $request->scout_name,
            'role' => $request->role,
            'team' => $request->team,
            'user_id' => 1
        ]);

        return redirect('scout/' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function show(Scout $scout)
    {
        //show a scout
        return view('scout.show', [
            'scoutt' => $scout,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function edit(Scout $scout)
    {
        //edit scout
        return view('scout.edit', [
            'scoutt' => $scout,
            ]); //returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scout $scout)
    {
        //
        $scout->update([
            'scout_name' => $request->scout_name,
            'role' => $request->role,
            'team' => $request->team
        ]);

        // return redirect('scouttutorial/' . $scout->id);
        return redirect('scout' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scout $scout)
    {
        //
        $scout->delete();

        return redirect('/scouttutorial');
    }
}
