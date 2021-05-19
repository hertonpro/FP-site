<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pillier extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','description'];

    
    public function project()
    {
        return $this->hasMany(Projet::class);
    }
    public function file()
    {
        return $this->belongsToMany(Files::class);
    }
}
