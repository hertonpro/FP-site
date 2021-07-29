<?php

namespace App\Http\Controllers;

use App\Models\bailleur;
use Illuminate\Http\Request;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'denomination' => 'required',
            'url' => 'required',
            'logo' => 'required|mimes:png,gif,jpg|max:2048',
        ]);
        bailleur::create($request->all());
        
  
        $fileName = $request->denomination.'.'.$request->logo->extension();  
   
        $request->logo->move(public_path('files/logobailleur'), $fileName);
   
        return back()
            ->with('success', 'Vous avez ajouter un nouveau bailleur '.$request->denomination);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function show(bailleur $bailleur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function edit(bailleur $bailleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bailleur $bailleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(bailleur $bailleur)
    {
        
    }
}
