<?php

namespace App\View\Components;

use App\Models\offre as modeloffre;
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
    public $offres;
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
       $offres=$this->offres=modeloffre::all();; 
        return view('components.offre',compact('offres'));
    }
}
