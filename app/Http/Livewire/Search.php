<?php

namespace App\Http\Livewire;
use App\Models\Offre;
use App\View\Components\offre as ComponentsOffre;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    public $search ;
    
    public function render()
    {
        if ($this->search == NULL) {
            $offres=Offre::all();
        }else{
            $offres=DB::table('offres')->where('titre','LIKE','%'.$this->search.'%')->get();
        }
        return view('livewire.search', compact('offres'));
    }
}
