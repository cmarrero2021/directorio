<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estado' => 'AMAZONAS',
                'iso_3166_2' => 'VE-X',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'estado' => 'ANZOÁTEGUI',
                'iso_3166_2' => 'VE-B',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'estado' => 'APURE',
                'iso_3166_2' => 'VE-C',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'estado' => 'ARAGUA',
                'iso_3166_2' => 'VE-D',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'estado' => 'BARINAS',
                'iso_3166_2' => 'VE-E',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'estado' => 'BOLÍVAR',
                'iso_3166_2' => 'VE-F',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'estado' => 'CARABOBO',
                'iso_3166_2' => 'VE-G',
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'estado' => 'COJEDES',
                'iso_3166_2' => 'VE-H',
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'estado' => 'DELTA AMACURO',
                'iso_3166_2' => 'VE-Y',
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'estado' => 'FALCÓN',
                'iso_3166_2' => 'VE-I',
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'estado' => 'GUÁRICO',
                'iso_3166_2' => 'VE-J',
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'estado' => 'LARA',
                'iso_3166_2' => 'VE-K',
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'estado' => 'MÉRIDA',
                'iso_3166_2' => 'VE-L',
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'estado' => 'MIRANDA',
                'iso_3166_2' => 'VE-M',
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'estado' => 'MONAGAS',
                'iso_3166_2' => 'VE-N',
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'estado' => 'NUEVA ESPARTA',
                'iso_3166_2' => 'VE-O',
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'estado' => 'PORTUGUESA',
                'iso_3166_2' => 'VE-P',
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'estado' => 'SUCRE',
                'iso_3166_2' => 'VE-R',
                'usuario_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'estado' => 'TÁCHIRA',
                'iso_3166_2' => 'VE-S',
                'usuario_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'estado' => 'TRUJILLO',
                'iso_3166_2' => 'VE-T',
                'usuario_id' => 1,
            ),
            20 => 
            array (
                'id' => 22,
                'estado' => 'YARACUY',
                'iso_3166_2' => 'VE-U',
                'usuario_id' => 1,
            ),
            21 => 
            array (
                'id' => 23,
                'estado' => 'ZULIA',
                'iso_3166_2' => 'VE-V',
                'usuario_id' => 1,
            ),
            22 => 
            array (
                'id' => 24,
                'estado' => 'DISTRITO CAPITAL',
                'iso_3166_2' => 'VE-A',
                'usuario_id' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'estado' => 'DEPENDENCIAS FEDERALES',
                'iso_3166_2' => 'VE-Z',
                'usuario_id' => 1,
            ),
            24 => 
            array (
                'id' => 21,
                'estado' => 'LA GUAIRA',
                'iso_3166_2' => 'VE-W',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}