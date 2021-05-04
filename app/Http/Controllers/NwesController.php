<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class NwesController extends Controller
{
    public function index()
    {
        //affiches les 50 dernieres articles posters
        $blogs = blog::all()->where('state', '1')->sortByDesc('id');
       //dd($blogs);
        return view('blog.nwes', compact('blogs'));
    }

    
    public function show($blog)
    {
        $article = blog::find($blog);
        //dd($article);
        return view('blog.show', compact('article'));
    }
}
