<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;

    protected $fillable = ['denomination','url','logo'];

    
    public function project()
    {
        return $this->hasMany(Projet::class);
    }
}
