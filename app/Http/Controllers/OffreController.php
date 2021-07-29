<?php

namespace App\Http\Controllers;

use App\Models\offre;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OffreController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     */

    public function __construct()
    {
        $editId = Auth::id();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //affiches les 50 dernieres articles posters
        $offres = offre::all();
        //dd($Offres);
        return view('offre.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $Offres = offre::all();
        return view('offre.create', compact('Offres'));
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
            'titre' => 'required',
            'type' => 'nullable',
            'description' => 'nullable',
            'projet' => 'nullable',
            'formulaire ' => 'nullable',
            'state' => 'nullable',
            'deadline' => 'nullable',
            'lieu'=>'nullable'
        ]);

        offre::create($request->all());

        return redirect()->route('offre.create')
            ->with('success', 'votre article à etais enregistre dans les brouillons');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($offre)
    {
        $offre = offre::find($offre);
        //dd($article);
        return view('offre.show', compact('offre'))->with('message', 'edition');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($offre)
    {
        $projets =Projet::all();
        $offre = offre::find($offre);
        $Offres = offre::all();
        return view('offre.edit', compact('offre','Offres','projets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($offre, Request $request)
    {
        //$post=offre::findOrFail($offre);
        $article = offre::find($offre);
        $article->update($request->all());
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    /**©
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($offre)
    {
        $offre = offre::findOrFail($offre);

        $offre->delete();

        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }
}
