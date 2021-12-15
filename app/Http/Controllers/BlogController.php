<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

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
        $blogs = Blog::all()->sortByDesc('id');
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
        $blogs = Blog::all()->sortByDesc('id');
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
            'type' => 'nullable',
            'article' => 'nullable',
            'tag' => 'nullable',
            'state' => 'nullable',
            'img' => 'nullable',
            'editeur' => 'nullable'
        ]);

        Blog::create($request->all());

        return redirect()->route('blogs.create')
            ->with('success', 'votre article à etais enregistre dans les brouillons');
    }

    public function comment(Request $request)
    {
        $request->validate([
            'blog_id' => 'required',
            'comment' => 'required'
        ]);

        Comment::create($request->all());
        return Redirect::back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $article = Blog::find($blog)->sortByDesc('id');
        return view('blog.show', compact('article'))->with('message', 'edition');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        $article = Blog::find($blog);
        $blogs = Blog::all()->sortByDesc('id');
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
        //dd($request->img);//$post=Blog::findOrFail($blog);
        $article = Blog::find($blog);
        if ($request->img === NULL) {
            $article->update([
                'titre' => $request->titre,
                'type' => $request->type,
                'article' => $request->article,
                'tag' => $request->tag,
                'editeur' => $request->editeur
            ]);
        } else {
            $request->validate([
                'img' => 'required|mimes:png,gif,jpg|max:2048',
            ]);
            $fileName = $request->img->hashName();
            $request->img->move(public_path('files/' . $blog), $fileName);
            $article->update([
                'titre' => $request->titre,
                'type' => $request->type,
                'article' => $request->article,
                'tag' => $request->tag,
                'img' => $fileName,
                'editeur' => $request->editeur
            ]);
        }
        
        
        
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    public function publish($blog, Request $request)
    {
        $subscribers = User::where('newsletter', '1')->get(['email'])->toArray();
        
        $emails=array_column($subscribers, 'email');
        $article = Blog::find($blog);

        $article->update([
            'state' => $request->state
        ]);
                $data = array();
   
      Mail::send(['text'=>'mail'], $data, function($message) use ($emails){
         $message->to($emails, 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('info@fondationpanzi.org', 'Fondation Panzi');
      });
        
        return Redirect::back()->with('message', 'L\'article à été publié avec succès');
    }
    /**©
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blog = Blog::findOrFail($blog);

        $blog->delete();

        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }
}
