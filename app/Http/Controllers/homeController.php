<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Fundraising;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        //affiches les 50 dernieres articles posters
        $blogs = Blog::all()->where('state', '1')->where('type','!=','Médias')->sortByDesc('id')->take(8);
        $medias = Blog::all()->where('type','=','Médias')->sortByDesc('id')->take(5);
        $fundraising = fundraising::all()->last();
        $colect = DB::table('transactions')->where('fundraising', '=', $fundraising->id)->sum('amount');
        return view('home', compact('blogs','medias','fundraising', 'colect'));
    }
}
