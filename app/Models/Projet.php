<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use app\Models\pilier;
class Projet extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','pilier_id','description','files','bailleur_id'];

    
    public function pilier(): BelongsTo
    {
        return $this->belongsTo(pilier::class);
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
