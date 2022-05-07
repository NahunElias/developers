<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetailEmployee extends Component
{    
    public $open = false;
    
    public $employee;

    public function mount($employee){
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.detail-employee');
    }
}
