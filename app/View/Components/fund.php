<?php

namespace App\View\Components;

use App\Models\Fundraising;
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
        if (Fundraising::all()->last() === null) {
            
        }else{
            $Fundraising=Fundraising::all()->last();
        $colect=DB::table('transactions')->where('Fundraising' , '=', $Fundraising->id)->sum('amount');
        return view('components.fund', compact('Fundraising','colect'));
        }
    }
}
