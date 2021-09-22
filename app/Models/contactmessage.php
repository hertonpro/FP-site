<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactmessage extends Model
{
    protected $filable =['sujet','exp_nom','exp_mail','massage'];
    use HasFactory;
}
