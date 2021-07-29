<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\quote;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards=award::all();
        $quotes=quote::all();
        return view('admin.prix',compact('awards','quotes'));
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
        //dd($request->logo);
        $request->validate([
            'denomination' => 'required',
            'url' => 'required',
            'logo' => 'required|mimes:png,gif,jpg|max:2048',
        ]);
        $fileName = $request->logo->hashName();  
        award::create(['denomination'=> $request->denomination,'url'=> $request->url,'logo'=>$fileName]); 
   
        $request->logo->move(public_path('files/prix'), $fileName);
   
        return back()
            ->with('success', 'Vous avez ajouter un nouveau prix '.$request->denomination);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(award $award)
    {
        //
    }
}
