<?php

namespace App\Http\Controllers;

use App\Models\infogeneral;
use App\Models\socialmedia;
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
        $infogeneral=infogeneral::all()->last();
        $socials=socialmedia::all();
        return view('admin.general', compact('infogeneral','socials'))->with('message', 'edition');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'mail' => 'nullable',
            'phone' => 'nullable',
            'adresse' => 'nullable',
        ]);
        $infogeneral = infogeneral::find($id);
        $infogeneral->update($request->all());
        return back()
            ->with('success', 'Les contacts ont été bien mise à jours');
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
    public function social(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'link'=>'required'
        ]);
        socialmedia::create($request->all());

        return redirect()->route('infogeneral.index')
            ->with('success', 'votre reséau sosial a été ajouter avec succes');
    }
}
