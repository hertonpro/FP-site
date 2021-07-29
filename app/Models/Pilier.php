<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pilier extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','description'];

    
    public function projet():HasMany
    {
        return $this->hasMany('app\Models\Projet', 'pilier_id', 'id');
    }
    public function file()
    {
        return $this->belongsToMany(Files::class);
    }
}
