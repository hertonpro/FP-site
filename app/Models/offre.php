<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offre extends Model
{
    use HasFactory;
    protected $fillable = ['titre','type','description','file','projey','formulaire','state'];

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
