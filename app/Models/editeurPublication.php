<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editeurPublication extends Model
{
    use HasFactory;
    protected $table = 'editeur_publication';
    protected $fillable = ['editeur_id','publication_id'];
}
