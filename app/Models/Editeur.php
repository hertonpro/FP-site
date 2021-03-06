<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editeur extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    public function publications()
    {
        return $this->belongsToMany(publication::class);
    }
}
