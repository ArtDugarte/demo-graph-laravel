<?php

namespace App\Livewire;

use Livewire\Component;

class BarCustomChart extends Component
{
    public function render(){

    $series = [
        "data" => [500, 650, 447, 555, 871],
        "categories" => ['Google', 'Facebook', 'Twitter', 'LinkedIn', 'Instagram'],
    ];
    
        return view('livewire.bar-custom-chart', compact('series'));
    }
}
