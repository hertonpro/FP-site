<?php

namespace App\View\Components;

use App\Models\voluntary as ModelsVoluntary;
use Illuminate\View\Component;
use Illuminate\Http\Request;

class voluntary extends Component
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

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'why'=>'required'
        ]);
        ModelsVoluntary::created($request->all());
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    
    public function render()
    {
        return view('components.voluntary');
    }
}
