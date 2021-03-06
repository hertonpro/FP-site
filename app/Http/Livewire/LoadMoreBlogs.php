<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Blog;

class LoadMoreBlogs extends Component
{
    public $limitPerPage = 3;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];
   
    public function loadMore()
    {
        $this->limitPerPage = $this->limitPerPage + 12;
    }

    public function render()
    {
        $blogs = Blog::latest()->paginate($this->limitPerPage);
        $this->emit('blogStore');

        return view('livewire.load-more-blogs', ['blogs' => $blogs]);
    }
}