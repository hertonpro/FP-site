<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class NewsController extends Controller
{
    public function index()
    {
        //affiches les 50 dernieres articles posters
        $blogs = Blog::all()->where('state', '1' )->sortByDesc('id')->take(7);
       //dd($blogs);
        $page = 'news';
        return view('blog.news', compact('blogs','page'));
    }

    public function media($cat)
    {
        //affiches les 50 dernieres articles posters
        $blogs = Blog::all()->where('state', '1')->where('type',$cat)->sortByDesc('id');
       //dd($blogs);
        $page = 'news';
        return view('blog.news', compact('blogs','page'));
    }

    
    public function show($blog)
    {
        //conteur de vues et des j'aime 
        Blog::find($blog)->increment('views');
        $article = Blog::find($blog);
        $comments = Comment::all()->where('blog_id', $blog)->sortByDesc('id');
        $scandir = array_diff(scandir('files/'.$blog), array('..', '.'));
        //dd($scandir);
        $page = 'news';
        return view('blog.show', compact('article','page','comments','scandir'));
    }

}
