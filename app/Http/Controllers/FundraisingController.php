<?php

namespace App\Http\Controllers;

use App\Models\fundraising;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class FundraisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fundraisings= fundraising::all();
        return view('fundraising.index', compact('fundraisings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fundraisings= fundraising::all();
        return view('fundraising.create', compact('fundraisings'));  
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
            'description' => 'required',
            'objectif'=>'required',
            'state'=>'required',
            'deadline'=>'nullable',
            'image' => 'required|mimes:png,gif,jpg|max:2048'
        ]);
        $image = $request->image->hashName();  
        fundraising::create(['titre'=> $request->titre,'description'=> $request->description,'objectif'=>$request->objectif,'state'=>$request->state,'deadline'=>$request->deadline,'image'=>$image]); 
   
        $request->image->move(public_path('files/fundraising'), $image);

        return back()->with('message', 'La campagne à était lancer.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fundraising  $fundraising
     * @return \Illuminate\Http\Response
     */
    public function show(fundraising $fundraising)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fundraising  $fundraising
     * @return \Illuminate\Http\Response
     */
    public function edit(fundraising $fundraising)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fundraising  $fundraising
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fundraising $fundraising)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fundraising  $fundraising
     * @return \Illuminate\Http\Response
     */
    public function destroy(fundraising $fundraising)
    {
        //
    }
}
