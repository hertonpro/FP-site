<?php

namespace App\View\Components;

use App\Models\infogeneral;
use App\Models\socialmedia;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $infogenerals = infogeneral::all()->last();
        $socials= socialmedia::all();
        return view('Components.footer', compact('infogenerals','socials'));
    }
}
