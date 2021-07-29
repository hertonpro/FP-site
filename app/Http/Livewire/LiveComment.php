<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class LiveComment extends Component
{
    
    public  function PostComment($request)
    {
        Comment::created($request->all());
    }
    public function render()
    {
        return view('livewire.live-comment');
    }
}
