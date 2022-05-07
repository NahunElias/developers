<?php

namespace App\Http\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\Types\Null_;

class ShowEmployees extends Component
{
    public $search;
    public $rango1;
    public $rango2;


    public function render()
    {
        $data = file_get_contents("ejemplo.json");

        
        if (is_null($this->search) && is_null($this->rango1) && is_null($this->rango2)) {
            $employees = collect(json_decode($data, true));
           
        } else {

            if(!is_null($this->search)){
                $employees = collect(json_decode($data, true))->where('email', $this->search);
            }
            else {
                $employees = collect(json_decode($data, true))->whereBetween('salary', [$this->rango1, $this->rango2]);
            }
        } 
        
        
       

        return view('livewire.show-employees', compact('employees'));
    }
}
