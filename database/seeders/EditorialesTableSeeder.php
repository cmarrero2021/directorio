<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EditorialesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('editoriales')->delete();
        
        \DB::table('editoriales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'editorial' => 'OTRA',
                'url' => '',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'editorial' => 'ELSEVIER',
                'url' => 'https://www.elsevier.com/',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'editorial' => 'SPRINGER',
                'url' => 'https://www.springer.com',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'editorial' => 'WILEY-BLACKWELL',
                'url' => 'https://www.wiley.com',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'editorial' => 'TAYLOR&FRANCIS',
                'url' => 'https://www.tandfonline.com',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'editorial' => 'SAGE',
                'url' => 'https://us.sagepub.com',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'editorial' => 'FDSFSDF',
                'url' => 'https://fdsfsdf.com',
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 12,
                'editorial' => 'dfsfsdf',
                'url' => 'fsdfd',
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 20,
                'editorial' => 'UNIVERSIDAD DE LOS ANDES',
                'url' => 'http://www.ula.ve/',
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 21,
                'editorial' => 'UNIVERSIDAD PEDAGóGICA EXPERIMENTAL LIBERTADOR',
                'url' => '',
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 22,
                'editorial' => 'CONSEJO COMUNAL DE LOS PALOS GRANDES',
                'url' => '',
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 23,
                'editorial' => 'UNIVERSIDAD CENTRAL DE VENEZUELA',
                'url' => '',
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 24,
                'editorial' => ' INSTITUTO VENEZOLANO DE INVESTIGACIONES CIENTíFIC',
                'url' => '',
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 25,
                'editorial' => 'UNIVERSIDAD MILITAR DE VENEZUELA',
                'url' => 'http://www.umbv.edu.ve/',
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 26,
                'editorial' => 'FUNDACIóN KOINONíA',
                'url' => '',
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 27,
                'editorial' => ' UNIVERSIDAD CENTROCCIDENTAL LISANDRO ALVARADO ',
                'url' => '',
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 28,
                'editorial' => 'EDITORIAL HORMIGUERO',
                'url' => 'www.hormiguero.com.ve/portafolio/revistas/',
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'editorial' => 'EDITORIAL 1',
                'url' => 'https://cmarrerodb.com',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}