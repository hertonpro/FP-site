<?php

namespace App\View\Components;

use Illuminate\View\Component;

class galery extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $path;
    public function __construct($article)
    {
        $this->article=$article;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $this->path= './files/'.$this->article;
           $scandir = scandir($this->path); 
        return view('Components.galery',compact('scandir'));
    }
}
