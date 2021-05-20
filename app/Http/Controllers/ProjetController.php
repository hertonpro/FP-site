<?php

namespace App\Http\Controllers;

use App\Models\Pillier;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class projetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets =projet::all();
        $pilliers =Pillier::all();
        return view('projet.create',compact('projets','pilliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilliers =Pillier::all();
        return view('projet.create',compact('pilliers'));
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
            'denomination'=>'required',
            'description'=>'nullable',
            'pillier'=>'nullable',
            'bailleur'=>'nullable',
            'file'=>'nullable'
        ]);
        $projets =projet::all();
        projet::create($request->all());

        return redirect()->route('projet.index')
            ->with('success', 'votre projet à etais ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(projet $projet)
    {
        $projets = projet::all();
        return view('projet.show', compact('projets','projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(projet $projet)
    {
        $projets = projet::all();
        $pilliers =Pillier::all();
        return view('projet.create', compact('projets','projet','pilliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projet = projet::find($id);
        $projet->update($request->all());
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(projet $projet)
    {
        //
    }
}
