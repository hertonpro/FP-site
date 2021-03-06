<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = ['token','amount','fundraising','donor','state','message'];

    public function fundraising()
    {
        return $this->belongsTo(fundraising::class, 'id', 'fundraising');
    }

}
