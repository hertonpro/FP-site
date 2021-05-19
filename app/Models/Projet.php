<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','pillier','description','files','bailleur'];

    
    public function pillier()
    {
        return $this->belongsTo(Pillier::class);
    }
    public function file()
    {
        return $this->belongsToMany(Files::class, 'id', 'for_id');
    }
    public function bailleur()
    {
        return $this->belongsToMany(Bailleur::class);
    }
}
