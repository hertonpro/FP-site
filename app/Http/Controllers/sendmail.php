<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

class sendmail{
    public $data;
    public function mailing($data){
        $this->data=(object)$data;
        Mail::send($this->data->layouts, $data,function ($message) {
            $message->to($this->data->exp_mail, $this->data->exp_nom)->subject('Fondation Panzi|' . $this->data->sujet);
            $message->from('info@fondationpanzi.org', 'Fondation Panzi');
        });
    }
}