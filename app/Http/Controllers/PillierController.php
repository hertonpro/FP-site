<?php

namespace App\Http\Controllers;

use App\Models\Pillier;
use App\Models\Projet;
use App\View\Components\projet as ComponentsProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PillierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilliers =Pillier::all();
        $projets = Projet::all();
        return view('pillier.index',compact('pilliers','projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pillier.create');
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
            'description'=>'nullable'
        ]);
        $pilliers =Pillier::all();
        Pillier::create($request->all());

        return redirect()->route('pillier.create',compact('pilliers'))
            ->with('success', 'votre pillier à etais ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pillier  $pillier
     * @return \Illuminate\Http\Response
     */
    public function show(Pillier $pillier)
    {
        $pilliers = Pillier::all();
        $projets = Projet::all();
        return view('pillier.show', compact('pilliers','pillier','projets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pillier  $pillier
     * @return \Illuminate\Http\Response
     */
    public function edit(Pillier $pillier)
    {
        $pilliers = Pillier::all();
        return view('pillier.create', compact('pilliers','pillier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pillier  $pillier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pillier = Pillier::find($id);
        $pillier->update($request->all());
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pillier  $pillier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pillier $pillier)
    {
        //
    }
}
