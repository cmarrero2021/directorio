<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasConocimientoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas_conocimiento')->delete();
        
        \DB::table('areas_conocimiento')->insert(array (
            0 => 
            array (
                'id' => 2,
                'area_conocimiento' => 'ASTRONOMIA Y ASTROFISICA',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'area_conocimiento' => 'CIENCIA POLITICA',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'area_conocimiento' => 'CIENCIAS AGRARIAS',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'area_conocimiento' => 'CIENCIAS DE LA TIERRA Y DEL ESPACIO',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'area_conocimiento' => 'CIENCIAS DE LA VIDA',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 7,
                'area_conocimiento' => 'CIENCIAS DE LAS ARTES Y LAS LETRAS',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'area_conocimiento' => 'CIENCIAS JURIDICAS Y DERECHO',
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'area_conocimiento' => 'CIENCIAS MEDICAS',
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 10,
                'area_conocimiento' => 'CIENCIAS TECNOLOGICAS',
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 11,
                'area_conocimiento' => 'CIENCIAS Y ARTES MILITARES',
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'area_conocimiento' => 'DEMOGRAFIA',
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'area_conocimiento' => 'ECONOMICAS',
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 14,
                'area_conocimiento' => 'ETICA',
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'area_conocimiento' => 'FILOSOFIA',
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'area_conocimiento' => 'FISICA',
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'area_conocimiento' => 'GEOGRAFIA',
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 18,
                'area_conocimiento' => 'HISTORIA',
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'area_conocimiento' => 'LINGUISTICA',
                'usuario_id' => 1,
            ),
            18 => 
            array (
                'id' => 20,
                'area_conocimiento' => 'LOGICA',
                'usuario_id' => 1,
            ),
            19 => 
            array (
                'id' => 21,
                'area_conocimiento' => 'MATEMATICAS',
                'usuario_id' => 1,
            ),
            20 => 
            array (
                'id' => 22,
                'area_conocimiento' => 'PEDAGOGIA',
                'usuario_id' => 1,
            ),
            21 => 
            array (
                'id' => 23,
                'area_conocimiento' => 'PSICOLOGIA',
                'usuario_id' => 1,
            ),
            22 => 
            array (
                'id' => 24,
                'area_conocimiento' => 'QUIMICA',
                'usuario_id' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'area_conocimiento' => 'SOCIOLOGÍA',
                'usuario_id' => 1,
            ),
            24 => 
            array (
                'id' => 1,
                'area_conocimiento' => 'ANTROPOLOGIA',
                'usuario_id' => 1,
            ),
            25 => 
            array (
                'id' => 27,
                'area_conocimiento' => 'CIENCIAS MéDICAS',
                'usuario_id' => 1,
            ),
            26 => 
            array (
                'id' => 28,
                'area_conocimiento' => 'CIENCIAS MéDICAS Y DE LA SALUD',
                'usuario_id' => 1,
            ),
            27 => 
            array (
                'id' => 29,
                'area_conocimiento' => 'MULTIDISCIPLINARIA',
                'usuario_id' => 1,
            ),
            28 => 
            array (
                'id' => 30,
                'area_conocimiento' => 'CIENCIAS SOCIALES',
                'usuario_id' => 1,
            ),
            29 => 
            array (
                'id' => 31,
                'area_conocimiento' => 'CIENCIAS PURAS',
                'usuario_id' => 1,
            ),
            30 => 
            array (
                'id' => 32,
                'area_conocimiento' => 'CIENCIAS AGRíCOLAS',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}