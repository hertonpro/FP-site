<?php

namespace App\Http\Controllers;

use App\Models\publication;
use App\Models\Editeur;
use App\Models\editeurPublication;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications=publication::all();
        return view('admin.publication', compact('publications'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'link'=>'required',
            'abstract'=>'required',
            'datePub'=>'required',
            'editeur'=>'required',
            'review'=>'required',
            'doc'=>'nullable |mimes:pdf'
        ]);
        $fileName = $request->doc->hashName();
   
        $request->doc->move(public_path('files/publications'), $fileName);
        Publication::create(['titre'=> $request->titre,'link'=> $request->link,'abstract'=> $request->abstract,'review'=>$request->review,'datePub'=>$request->datePub, 'doc'=>$fileName]);

        $editeurs = explode(",", $request->editeur);
        //dd($editeurs);
        foreach ($editeurs as $editeur) {
            
            if (Editeur::where('nom', '=', $editeur)->count() > 0) {
                //$editeur=Editeur::where('nom', '=', $editeur)->find()->id;
                $publication=Publication::all()->last()->id;
                $editeur=Editeur::where('nom', $editeur)->first()->id;
                editeurPublication::create(['editeur_id'=>$editeur,'publication_id'=>$publication]);
            } else {
                Editeur::create(['nom' => $editeur]);
                $editeur=Editeur::where('nom', $editeur)->first()->id;
                $publication=Publication::all()->last()->id;
                editeurPublication::create(['editeur_id'=>$editeur,'publication_id'=>$publication]);
            }
        }
        return back()->with('success','Vous avais ajouter une publication avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(publication $publication)
    {
        //
    }
}
