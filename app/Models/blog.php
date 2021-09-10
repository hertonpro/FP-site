<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Comment;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = ['titre','type','article','tag','img','state','editeur'];

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function editeur()
    {
        return $this->belongsTo(user::class, 'id' ,'editeur');
    }
}
