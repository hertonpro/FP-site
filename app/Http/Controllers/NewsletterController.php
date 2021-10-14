<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsletter;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\sendmail;

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
        if (0 == newsletter::where('mail', $request->mail)->count()) {
            
            newsletter::create($request->all());
            $data=array(
                'layouts'=>'layouts.mail',
                'sujet' => 'Ajouter dans la newsletter',
                'exp_nom' => $request->nom,
                'exp_mail' => $request->mail,
                "mail_message"=>"Nous sommes ravies de vous informer que nous avons ressuies votre message avec succès,nous vous revenons dans un bref délai pour plus des détails."
            );
            $mail = new sendmail;
            $mail->mailing($data);
            Alert::success('Success', 'Vous avez été ajouté avec succès dans la newsletter de la fondation Panzi !');
            return redirect('/');
        } else {
            Alert::warning('Attention', 'Vous faites déjà partie de la newsletter de la Fondation Panzi! !');
            return redirect('/');
        }
    }
}
