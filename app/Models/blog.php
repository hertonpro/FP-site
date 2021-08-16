<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->hasOne(user::class, 'id', 'editeur');
    }


}
