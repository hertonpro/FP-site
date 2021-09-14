<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Comment;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        //affiches les 50 dernieres articles posters
        $blogs = Blog::all()->where('state', '1')->where('type','!=','Médias')->sortByDesc('id')->take(8);
        $medias = Blog::all()->where('type','=','Médias')->sortByDesc('id')->take(6);
        return view('home', compact('blogs','medias'));
    }
}
