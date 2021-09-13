<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $datacount;
    public $modelname;
    public $table;
    public $unit;
    public function render()
    {
        if ($this->table == NULL) {
            $model = "App\Models\\" . $this->modelname;
            $this->datacount = $model::count();
            return view('livewire.counter')->with($this->datacount);
        }else{
            $model = "App\Models\\" . $this->modelname;
            $this->datacount = $model::all()->sum($this->table);
            return view('livewire.counter')->with($this->datacount, $this->unit);
        }
    }
}
