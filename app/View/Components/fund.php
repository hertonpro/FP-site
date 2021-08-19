<?php

namespace App\View\Components;

use App\Models\fundraising;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class fund extends Component
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
        if (fundraising::all()->last() === null) {
            
        }else{
            $fundraising=fundraising::all()->last();
        $colect=DB::table('transactions')->where('fundraising' , '=', $fundraising->id)->sum('amount');
        return view('components.fund', compact('fundraising','colect'));
        }
    }
}
