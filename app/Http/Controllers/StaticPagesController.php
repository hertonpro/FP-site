<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\quote;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function onesc(){
        return view('static.onesc');
    }
    public function cj(){
        return view('static.cj');
    }
    public function icart(){
        return view('static.icart');
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
        return view('static.dr',compact('awards','quotes'));
    }
    public function eq(){
        return view('static.eq');
    }

}

