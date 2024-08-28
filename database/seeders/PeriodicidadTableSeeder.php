<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeriodicidadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('periodicidad')->delete();
        
        \DB::table('periodicidad')->insert(array (
            0 => 
            array (
                'id' => 3,
                'periodicidad' => 'QUINCENAL',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'periodicidad' => 'MENSUAL',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'periodicidad' => 'BIMENSUAL',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'periodicidad' => 'TRIMESTRAL',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 7,
                'periodicidad' => 'CUATRIMESTRAL',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 8,
                'periodicidad' => 'SEMESTRAL',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 9,
                'periodicidad' => 'ANUAL',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}