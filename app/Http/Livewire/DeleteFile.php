<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class DeleteFile extends Component
{
    public $file;
    public function delete(){
        @unlink('files/doc/offre_' . $this->file.'.pdf');
        Redirect::back(); 
    }

    public function render()
    {
        return view('livewire.delete-file');
    }
}
