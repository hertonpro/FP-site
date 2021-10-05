<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('other.newsletter');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'mail' => 'required'
        ]);
        newsletter::create($request->all());
        return redirect()->back();
    }
}
