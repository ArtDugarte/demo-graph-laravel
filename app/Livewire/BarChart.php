<?php

namespace App\Livewire;

use Livewire\Component;

class BarChart extends Component
{

    public $n = 5;

    public function randomArrayOfNumbers()
    {

        $data = [];

        for ($i = 0; $i < $this->n; $i++) {
            $data[] = rand(0, 1000);
        }

        return $data;
    }

    public function getLastNYears(){

        $years = [];

        for ($i = 0; $i < $this->n; $i++) {
            $years[] = date('Y') - $i;
        }

        return $years;
    }

    public function render()
    {

        $series = [
            [
                'name' => 'Cliente 1',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Cliente 2',
                'data' => $this->randomArrayOfNumbers(),
            ]
        ];

        $categories = $this->getLastNYears();
        return view('livewire.bar-chart', compact('series', 'categories'));
    }
}
