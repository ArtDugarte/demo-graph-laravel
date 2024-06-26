<?php

namespace App\Livewire;

use Livewire\Component;

class AreaChart extends Component
{
    public function randomArrayOfNumbers()
    {
        $data = [];
        $last = 13;

        for ($i = 0; $i < $last; $i++) {
            $data[] = rand(0, 1000);
        }

        return $data;
    }

    public function getMonths()
    {
        $year = date('Y');

        // Obtener el mes actual del año en curso
        $currentMonth = date('m') - 1;

        for ($i = $currentMonth; $i >= 0; $i--) {
            $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
        }

        $year = $year - 1;

        for ($i = 11; $i >= $currentMonth; $i--) {
            $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
        }

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

        return view('livewire.area-chart', compact('series', 'categories'));
    }
}
