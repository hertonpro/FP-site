<?php

namespace App\Http\Controllers;

use App\Models\infogeneral;
use Illuminate\Http\Request;

class InfogeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infogeneral=infogeneral::all()->last()->id;
        return view('admin.general', compact('infogeneral'));
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
   //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infogeneral  $infogeneral
     * @return \Illuminate\Http\Response
     */
    public function show(infogeneral $infogeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\infogeneral  $infogeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(infogeneral $infogeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\infogeneral  $infogeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infogeneral $infogeneral)
    {
        $request->validate([
            'mail' => 'nullable',
            'phone' => 'nullable',
            'adresse' => 'nullable',
        ]);
        $infogeneral = infogeneral::find($infogeneral);
        dd($infogeneral);
        return back()
            ->with('success', 'Vous avez ajouter un nouveau prix '.$request->denomination);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\infogeneral  $infogeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(infogeneral $infogeneral)
    {
        //
    }
}
