<?php

namespace App\Livewire;

use Livewire\Component;

class GraphContainer extends Component
{
    public function randomArrayOfNumbers()
    {

        $data = [];
        $todayMonth = date('m');

        for ($i = 0; $i < $todayMonth; $i++) {
            $data[] = rand(0, 1000);
        }

        return $data;
    }

    public function getMonthsOfActualYear()
    {

        $year = date('Y');

        $dates = [];

        for ($i = 0; $i < 12; $i++) {
            $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
        }
        $dates[] = $year.'-12-31T23:59:59.999-04:00';

        return $dates;
    }

    public function render()
    {

        $series = [
            [
                'name' => 'Arthuro',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Max',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Laura',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Tiffany',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Teresa',
                'data' => $this->randomArrayOfNumbers(),
            ],
        ];

        $categories = $this->getMonthsOfActualYear();

        return view('livewire.graph-container', compact('series', 'categories'));
    }
}
