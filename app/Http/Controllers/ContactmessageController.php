<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MailController;
use App\Models\Contactmessage;

use Illuminate\Http\Request;

class ContactmessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'sujet' => 'required',
            'exp_nom' => 'required',
            'exp_mail' => 'required',
            'massage' => 'required'
        ]);

        return redirect()->route('home');
    }
}
