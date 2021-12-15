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

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $fundraising = fundraising::all()->last();
        $colect = DB::table('transactions')->where('fundraising', '=', $fundraising->id)->sum('amount');
        return view('Components.fund', compact('fundraising', 'colect'));
    }
}
