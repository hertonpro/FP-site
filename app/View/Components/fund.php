<?php

namespace App\View\Components;

use App\Models\Fundraising;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class fund extends Component
{
    public $fundraising;
        public $colect;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fundraising = Fundraising::all()->last();
        $this->colect = DB::table('transactions')->where('fundraising', '=', $this->fundraising->id)->sum('amount');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $fundraising=$this->fundraising;
        $colect=$this->colect;
        return view('components.fund', compact('fundraising', 'colect'));
    }
}
