<?php

namespace App\View\Components;


use App\Models\pilier;

use App\Models\Projet;
use Illuminate\View\Component;

class menuProjet extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $piliers = pilier::with('projet')->get();
        return view('Components.menu-projet', compact('piliers'));
    }
}
