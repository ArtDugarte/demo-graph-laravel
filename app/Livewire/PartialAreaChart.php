<?php

namespace App\Livewire;

use Livewire\Component;

class PartialAreaChart extends Component
{
    public function randomArrayOfNumbers()
    {
        $data = [];
        $last = date('m');

        for ($i = 0; $i < $last; $i++) {
            $data[] = rand(0, 1000);
        }

        return $data;
    }

    public function getMonths()
    {
        $year = date('Y');

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
                'name' => 'Contribuyentes',
                'data' => $this->randomArrayOfNumbers(), //El array debe tener en el primer elemento la cantidad más reciente y de último la cantidad más antigua
            ],
            [
                'name' => 'Actividad Economica',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Publicidad',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Inmueble Urbano',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Vehiculos',
                'data' => $this->randomArrayOfNumbers(),
            ],
            [
                'name' => 'Aseo Urbano',
                'data' => $this->randomArrayOfNumbers(),
            ],
        ];

        $categories = $this->getMonths();

        return view('livewire.partial-area-chart', compact('series', 'categories'));
    }
}
