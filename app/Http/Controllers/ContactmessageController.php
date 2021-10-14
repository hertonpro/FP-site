<?php

namespace App\Http\Controllers;

use App\Http\Controllers\sendmail;
use App\Models\contactmessage;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ContactmessageController extends Controller
{
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
            'layouts'=>'layouts.mail',
            'sujet' => $request->sujet,
            'exp_nom' => $request->exp_nom,
            'exp_mail' => $request->exp_mail,
            "mail_message"=>"Nous sommes ravies de vous informer que nous avons ressuies votre message avec succès,nous vous revenons dans un bref délai pour plus des détails."
        );
        $mail = new sendmail;
        $mail->mailing($data);
        Alert::success('Success', 'Votre message a été envoyé avec succès!');
        return redirect()->back();
    }
}
