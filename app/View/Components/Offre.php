<?php



namespace App\View\Components;



use App\Models\Offre as modeloffre;

use Illuminate\View\Component;



class Offre extends Component

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

        $offres=modeloffre::all();; 

        return view('components.offre',compact('offres'));

    }

}

