<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
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
        $blogs = blog::all();
        //dd($blogs);
        return view('blog.index', compact('blogs'));
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
        $blogs = blog::all();
        return view('blog.create', compact('blogs'));
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
            'type'=>'nullable',
            'article'=>'nullable',
            'tag'=>'nullable',
            'state'=>'nullable',
            'editeur'=>'nullable'
        ]);
    
        blog::create($request->all());
     
        return redirect()->route('blogs.create')
                        ->with('success','votre article à etais enregistre dans les brouillons');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $article = blog::find($blog);
        //dd($article);
        return view('blog.show', compact('article'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        $article = blog::find($blog);
        $blogs = blog::all();
        return view('blog.edit', compact('article'), compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($blog, Request $request)
    {
        //$post=blog::findOrFail($blog);
        $article = blog::find($blog);
        $article->update($request->all());
        return view('blog.show', compact('article'));
    }

    /**©
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blog = blog::findOrFail($blog);

        $blog->delete();
    
        return redirect()->route('blogs.create');
    }
}
