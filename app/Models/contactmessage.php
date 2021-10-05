<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactmessage extends Model
{
    use HasFactory;
    
    protected $fillable =['sujet','exp_nom','exp_mail','message'];
}