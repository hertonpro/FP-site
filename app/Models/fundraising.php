<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraising extends Model
{
    use HasFactory;
    protected $fillable= ['titre','description','image','objectif','state','deadline'];

    public function transactions()
    {
        return $this->hasMany(transaction::class);
    }
}
