<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','type','description','url'];

    
    public function pilier()
    {
        return $this->belongsToMany(pilier::class,'id','for_id');
    }
    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id', 'for_id');
    }
}
