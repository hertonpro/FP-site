<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Contactmessage;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ContactmessageController extends Controller
{
    public $request;


    public function store(Request $request)
    {
        $request->validate([
            'sujet' => 'required',
            'exp_nom' => 'required',
            'exp_mail' => 'required',
            'message' => 'required'
        ]);
        Contactmessage::create($request->all());
        $this->request=$request;

        $data = array('name' => $request->exp_nom, );
        Mail::send('mail', $data, function ($message) {
            $message->to($this->request->exp_mail, 'Contact Fondation Panzi')->subject('Fondation Panzi|' . $this->request->sujet);
            $message->from('info@fondationpanzi.org', 'Communication');
        });
        Alert::success('Success', 'Votre message a été envoyé avec succès!');
        return redirect()->back();
    }
}
