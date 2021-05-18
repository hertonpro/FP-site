<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\Service\Search;

class LiveSearch extends Component
{
    public $key;

    public $blogs=[]; 

    public function search()
    {
        return search::SearchBy('fuga');
    }


    public function render()
    {
        return view('livewire.live-search');
    }
}
