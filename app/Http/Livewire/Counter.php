<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 101;
    public $number;
    public $inNumber = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->counter++;
    }

    public function decrement(){
        $this->counter--;
    }

    public function incrementNumber($number){
        $this->counter += $number;
    }

    public function decrementNumber($number){
        $this->counter -= $number;
    }
    public function inNumber(){
        $this->counter += $this->inNumber;
    }
}
