<?php

namespace App\View\Components;

use App\Models\offre as ModelsOffre;
use Illuminate\View\Component;

class offre extends Component
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
        $offres=ModelsOffre::all();
        return view('components.offre',compact('offres'));
    }
}
