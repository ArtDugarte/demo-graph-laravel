<?php

namespace App\Livewire;

use Livewire\Component;

class AreaChart extends Component
{
    // graph-full para obtener todos los ultimos 12 meses y graph-partial para obtener los meses del año en curso
    public $type = 'graph-full';

    public function randomArrayOfNumbers()
    {
        $data = [];
        $last = $this->type === 'graph-full' ? 13 : date('m');

        for ($i = 0; $i < $last; $i++) {
            $data[] = rand(0, 1000);
        }

        return $data;
    }

    public function getMonths()
    {
        $year = date('Y');

        if ($this->type === 'graph-full') {

            // Obtener el mes actual del año en curso
            $currentMonth = date('m') - 1;

            for ($i = $currentMonth; $i >= 0; $i--) {
                $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
            }

            $year = $year - 1;

            for ($i = 11; $i >= $currentMonth; $i--) {
                $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
            }
        } else {

            for ($i = 0; $i < 12; $i++) {
                $dates[] = $year.'-'.str_pad($i + 1, 2, '0', STR_PAD_LEFT).'-01T00:00:00.000Z';
            }
            $dates[] = $year.'-12-31T23:59:59.999-04:00';
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
