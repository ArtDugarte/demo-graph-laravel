<?php

namespace App\Livewire;

use Livewire\Component;

class StatCard extends Component
{

    public $title;
    public $value;
    public $quantity;
    public $color;
    public $url = '#';
    public $icon;
    
    public function render()
    {
        return view('livewire.stat-card');
    }
}
