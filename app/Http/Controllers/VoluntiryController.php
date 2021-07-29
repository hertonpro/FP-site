<?php

namespace App\Http\Controllers;

use App\Models\voluntary;
use Illuminate\Http\Request;

class VoluntiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'why'=>'required'
        ]);
        voluntary::created($request->all());
        return redirect()->route('contact');
    }
}
