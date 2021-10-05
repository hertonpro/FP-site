<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as mailf;

class Mail 
{
    public $data;
    static function email($data) {  
        mailf::send('mail',$data, function($message) {
           $message->to($this->data->mailTo,$this->data->exp)->subject
              ($this->data->subject);
           $message->from('info@fondationpanzi.org', 'Fondation Panzi');
        });
     }
}
