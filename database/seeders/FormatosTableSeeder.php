<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormatosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('formatos')->delete();
        
        \DB::table('formatos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'formato' => 'IMPRESO',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'formato' => 'DIGITAL',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'formato' => 'MIXTO',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}