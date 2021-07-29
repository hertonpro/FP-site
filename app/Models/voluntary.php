<?php

namespace App\Models;
use illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voluntary extends Model
{
    use HasFactory;
    protected $fillable = ['denomination','description'];
    public function store(Request $request)
    {
        $request->validate([
            'why'=>'required',
            'user_id'=>'required'
        ]);
        Comment::created($request->all());
        return redirect()->route('news.show');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
