<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periodicidad;

class PeriodicidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periodicidad::truncate();
        $periodos = [
            ['periodicidad' => 'QUINCENAL','usuario_id' => 1],
            ['periodicidad' => 'MENSUAL','usuario_id' => 1],
            ['periodicidad' => 'BIMENSUAL','usuario_id' => 1],
            ['periodicidad' => 'TRIMESTRAL','usuario_id' => 1],
            ['periodicidad' => 'CUATRIMESTRAL','usuario_id' => 1],
            ['periodicidad' => 'SEMESTRAL','usuario_id' => 1],
            ['periodicidad' => 'ANUAL','usuario_id' => 1],
        ];
        foreach($periodos as $periodo) {
            Periodicidad::create($periodo);
        }        

    }
}
