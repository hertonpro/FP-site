<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\contactmessage;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ContactmessageController extends Controller
{
    public $data;


    public function store(Request $request)
    {
        $request->validate([
            'sujet' => 'required',
            'exp_nom' => 'required',
            'exp_mail' => 'required',
            'message' => 'required'
        ]);
        contactmessage::create($request->all());
        $data=array(
            'sujet' => $request->sujet,
            'exp_nom' => $request->exp_nom,
            'exp_mail' => $request->exp_mail,
            "mail_message"=>"Nous sommes ravies de vous informer que nous avons ressuies votre message avec succès,nous vous revenons dans un bref délai pour plus des détails."
        );
        $this->data=(object)$data;
        Mail::send('layouts.mail', $data,function ($message) {
            $message->to($this->data->exp_mail, $this->data->exp_nom)->subject('Fondation Panzi|' . $this->data->sujet);
            $message->from('info@fondationpanzi.org', 'Fondation Panzi');
        });
        Alert::success('Success', 'Votre message a été envoyé avec succès!');
        return redirect()->back();
    }
}
