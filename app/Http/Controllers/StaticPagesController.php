<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\editeur;
use App\Models\editeurPublication;
use App\Models\publication;
use App\Models\quote;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class StaticPagesController extends Controller
{
    public function onesc(){
        return view('static.onesc');
    }
    public function cj(){
        return view('static.cj');
    }
    public function icart(){
        $awards=award::all();
        $quotes=quote::all();
        $publications=publication::with('editeurs')->get();
        return view('static.icart',compact('awards','quotes','publications'));
    }
    public function md(){
        return view('static.md');
    }
    public function joie(){
        return view('static.joie');
    }
    public function fp(){
        return view('static.fp');
    }
    public function dr(){
        $awards=award::all();
        $quotes=quote::all();
        $publications=publication::with('editeurs')->get();
        return view('static.dr',compact('awards','quotes','publications'));
    }
    public function eq(){
        return view('static.eq');
    }

}