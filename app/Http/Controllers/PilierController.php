<?php

namespace App\Http\Controllers;

use App\Models\Pilier;
use App\Models\Projet;
use App\View\Components\projet as ComponentsProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piliers =Pilier::all();
        $projets = Projet::all();
        return view('pilier.index',compact('piliers','projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piliers =Pilier::all();
        $projets = Projet::all();
        return view('pilier.create',compact('piliers','projets'));
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
        $piliers =Pilier::all();
        Pilier::create($request->all());

        return redirect()->route('pilier.create',compact('piliers'))
            ->with('success', 'votre pilier à etais ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pilier  $pilier
     * @return \Illuminate\Http\Response
     */
    public function show(Pilier $pilier)
    {
        $piliers = Pilier::all();
        $projets = Projet::all();
        $projetsDupilier = Projet::all()->where('pilier',$pilier);
        return view('pilier.show', compact('piliers','pilier','projets','projetsDupilier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pilier  $pilier
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilier $pilier)
    {
        $piliers = Pilier::all();
        return view('pilier.create', compact('piliers','pilier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pilier  $pilier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pilier = Pilier::find($id);
        $pilier->update($request->all());
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pilier  $pilier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilier $pilier)
    {
        //
    }
}
