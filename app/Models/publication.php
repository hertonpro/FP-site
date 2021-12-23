<?php

namespace App\Models;
use App\Models\Editeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;
    protected $fillable = ['titre','link','abstract','review','doc','datePub'];

    public function editeurs()
    {
        return $this->belongsToMany(Editeur::class);
    }
}
