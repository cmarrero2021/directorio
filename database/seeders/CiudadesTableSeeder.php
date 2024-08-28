<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciudades')->delete();
        
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 127,
                'estado_id' => 7,
                'ciudad' => 'VALENCIA',
                'capital' => true,
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 143,
                'estado_id' => 8,
                'ciudad' => 'SAN CARLOS',
                'capital' => true,
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 148,
                'estado_id' => 9,
                'ciudad' => 'TUCUPITA',
                'capital' => true,
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 1,
                'estado_id' => 1,
                'ciudad' => 'MAROA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 149,
                'estado_id' => 24,
                'ciudad' => 'CARACAS',
                'capital' => true,
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 158,
                'estado_id' => 10,
                'ciudad' => 'CORO',
                'capital' => true,
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 204,
                'estado_id' => 11,
                'ciudad' => 'SAN JUAN DE LOS MORROS',
                'capital' => true,
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 212,
                'estado_id' => 12,
                'ciudad' => 'BARQUISIMETO',
                'capital' => true,
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 245,
                'estado_id' => 13,
                'ciudad' => 'MÉRIDA',
                'capital' => true,
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 279,
                'estado_id' => 14,
                'ciudad' => 'LOS TEQUES',
                'capital' => true,
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 311,
                'estado_id' => 15,
                'ciudad' => 'MATURÍN',
                'capital' => true,
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 328,
                'estado_id' => 16,
                'ciudad' => 'LA ASUNCIÓN',
                'capital' => true,
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 364,
                'estado_id' => 18,
                'ciudad' => 'CUMANÁ',
                'capital' => true,
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 405,
                'estado_id' => 19,
                'ciudad' => 'SAN CRISTOBAL',
                'capital' => true,
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 65,
                'estado_id' => 4,
                'ciudad' => 'OCUMARE DE LA COSTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 67,
                'estado_id' => 4,
                'ciudad' => 'SAN CASIMIRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 68,
                'estado_id' => 4,
                'ciudad' => 'SAN MATEO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 69,
                'estado_id' => 4,
                'ciudad' => 'SAN SEBASTIÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            18 => 
            array (
                'id' => 70,
                'estado_id' => 4,
                'ciudad' => 'SANTA CRUZ DE ARAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            19 => 
            array (
                'id' => 71,
                'estado_id' => 4,
                'ciudad' => 'TOCORÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            20 => 
            array (
                'id' => 72,
                'estado_id' => 4,
                'ciudad' => 'TURMERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            21 => 
            array (
                'id' => 73,
                'estado_id' => 4,
                'ciudad' => 'VILLA DE CURA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            22 => 
            array (
                'id' => 74,
                'estado_id' => 4,
                'ciudad' => 'ZUATA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            23 => 
            array (
                'id' => 76,
                'estado_id' => 5,
                'ciudad' => 'BARINITAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            24 => 
            array (
                'id' => 77,
                'estado_id' => 5,
                'ciudad' => 'BARRANCAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            25 => 
            array (
                'id' => 78,
                'estado_id' => 5,
                'ciudad' => 'CALDERAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            26 => 
            array (
                'id' => 79,
                'estado_id' => 5,
                'ciudad' => 'CAPITANEJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            27 => 
            array (
                'id' => 80,
                'estado_id' => 5,
                'ciudad' => 'CIUDAD BOLIVIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            28 => 
            array (
                'id' => 81,
                'estado_id' => 5,
                'ciudad' => 'EL CANTÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            29 => 
            array (
                'id' => 82,
                'estado_id' => 5,
                'ciudad' => 'LAS VEGUITAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            30 => 
            array (
                'id' => 83,
                'estado_id' => 5,
                'ciudad' => 'LIBERTAD DE BARINAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            31 => 
            array (
                'id' => 84,
                'estado_id' => 5,
                'ciudad' => 'SABANETA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            32 => 
            array (
                'id' => 85,
                'estado_id' => 5,
                'ciudad' => 'SANTA BÁRBARA DE BARINAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            33 => 
            array (
                'id' => 86,
                'estado_id' => 5,
                'ciudad' => 'SOCOPÓ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            34 => 
            array (
                'id' => 87,
                'estado_id' => 6,
                'ciudad' => 'CAICARA DEL ORINOCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            35 => 
            array (
                'id' => 88,
                'estado_id' => 6,
                'ciudad' => 'CANAIMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            36 => 
            array (
                'id' => 90,
                'estado_id' => 6,
                'ciudad' => 'CIUDAD PIAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            37 => 
            array (
                'id' => 91,
                'estado_id' => 6,
                'ciudad' => 'EL CALLAO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            38 => 
            array (
                'id' => 92,
                'estado_id' => 6,
                'ciudad' => 'EL DORADO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            39 => 
            array (
                'id' => 93,
                'estado_id' => 6,
                'ciudad' => 'EL MANTECO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            40 => 
            array (
                'id' => 94,
                'estado_id' => 6,
                'ciudad' => 'EL PALMAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            41 => 
            array (
                'id' => 95,
                'estado_id' => 6,
                'ciudad' => 'EL PAO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            42 => 
            array (
                'id' => 96,
                'estado_id' => 6,
                'ciudad' => 'GUASIPATI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            43 => 
            array (
                'id' => 97,
                'estado_id' => 6,
                'ciudad' => 'GURI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            44 => 
            array (
                'id' => 98,
                'estado_id' => 6,
                'ciudad' => 'LA PARAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            45 => 
            array (
                'id' => 99,
                'estado_id' => 6,
                'ciudad' => 'MATANZAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            46 => 
            array (
                'id' => 100,
                'estado_id' => 6,
                'ciudad' => 'PUERTO ORDAZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            47 => 
            array (
                'id' => 108,
                'estado_id' => 7,
                'ciudad' => 'CAMPO DE CARABOBO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            48 => 
            array (
                'id' => 110,
                'estado_id' => 7,
                'ciudad' => 'CENTRAL TACARIGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            49 => 
            array (
                'id' => 111,
                'estado_id' => 7,
                'ciudad' => 'CHIRGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            50 => 
            array (
                'id' => 112,
                'estado_id' => 7,
                'ciudad' => 'CIUDAD ALIANZA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            51 => 
            array (
                'id' => 113,
                'estado_id' => 7,
                'ciudad' => 'EL PALITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            52 => 
            array (
                'id' => 114,
                'estado_id' => 7,
                'ciudad' => 'GUACARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            53 => 
            array (
                'id' => 115,
                'estado_id' => 7,
                'ciudad' => 'GUIGUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            54 => 
            array (
                'id' => 116,
                'estado_id' => 7,
                'ciudad' => 'LAS TRINCHERAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            55 => 
            array (
                'id' => 117,
                'estado_id' => 7,
                'ciudad' => 'LOS GUAYOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            56 => 
            array (
                'id' => 118,
                'estado_id' => 7,
                'ciudad' => 'MARIARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            57 => 
            array (
                'id' => 119,
                'estado_id' => 7,
                'ciudad' => 'MIRANDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            58 => 
            array (
                'id' => 120,
                'estado_id' => 7,
                'ciudad' => 'MONTALBÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            59 => 
            array (
                'id' => 121,
                'estado_id' => 7,
                'ciudad' => 'MORÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            60 => 
            array (
                'id' => 122,
                'estado_id' => 7,
                'ciudad' => 'NAGUANAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            61 => 
            array (
                'id' => 123,
                'estado_id' => 7,
                'ciudad' => 'PUERTO CABELLO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            62 => 
            array (
                'id' => 124,
                'estado_id' => 7,
                'ciudad' => 'SAN JOAQUÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            63 => 
            array (
                'id' => 125,
                'estado_id' => 7,
                'ciudad' => 'TOCUYITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            64 => 
            array (
                'id' => 126,
                'estado_id' => 7,
                'ciudad' => 'URAMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            65 => 
            array (
                'id' => 128,
                'estado_id' => 7,
                'ciudad' => 'VIGIRIMITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            66 => 
            array (
                'id' => 129,
                'estado_id' => 8,
                'ciudad' => 'AGUIRRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            67 => 
            array (
                'id' => 130,
                'estado_id' => 8,
                'ciudad' => 'APARTADEROS COJEDES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            68 => 
            array (
                'id' => 131,
                'estado_id' => 8,
                'ciudad' => 'ARISMENDI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            69 => 
            array (
                'id' => 132,
                'estado_id' => 8,
                'ciudad' => 'CAMURIQUITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            70 => 
            array (
                'id' => 133,
                'estado_id' => 8,
                'ciudad' => 'EL BAÚL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            71 => 
            array (
                'id' => 134,
                'estado_id' => 8,
                'ciudad' => 'EL LIMÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            72 => 
            array (
                'id' => 135,
                'estado_id' => 8,
                'ciudad' => 'EL PAO COJEDES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            73 => 
            array (
                'id' => 136,
                'estado_id' => 8,
                'ciudad' => 'EL SOCORRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            74 => 
            array (
                'id' => 137,
                'estado_id' => 8,
                'ciudad' => 'LA AGUADITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            75 => 
            array (
                'id' => 138,
                'estado_id' => 8,
                'ciudad' => 'LAS VEGAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            76 => 
            array (
                'id' => 139,
                'estado_id' => 8,
                'ciudad' => 'LIBERTAD DE COJEDES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            77 => 
            array (
                'id' => 140,
                'estado_id' => 8,
                'ciudad' => 'MAPUEY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            78 => 
            array (
                'id' => 141,
                'estado_id' => 8,
                'ciudad' => 'PIÑEDO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            79 => 
            array (
                'id' => 142,
                'estado_id' => 8,
                'ciudad' => 'SAMANCITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            80 => 
            array (
                'id' => 144,
                'estado_id' => 8,
                'ciudad' => 'SUCRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            81 => 
            array (
                'id' => 145,
                'estado_id' => 8,
                'ciudad' => 'TINACO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            82 => 
            array (
                'id' => 146,
                'estado_id' => 8,
                'ciudad' => 'TINAQUILLO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            83 => 
            array (
                'id' => 147,
                'estado_id' => 8,
                'ciudad' => 'VALLECITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            84 => 
            array (
                'id' => 150,
                'estado_id' => 24,
                'ciudad' => 'EL JUNQUITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            85 => 
            array (
                'id' => 151,
                'estado_id' => 10,
                'ciudad' => 'ADÍCORA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            86 => 
            array (
                'id' => 152,
                'estado_id' => 10,
                'ciudad' => 'BOCA DE AROA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            87 => 
            array (
                'id' => 153,
                'estado_id' => 10,
                'ciudad' => 'CABURE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            88 => 
            array (
                'id' => 154,
                'estado_id' => 10,
                'ciudad' => 'CAPADARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            89 => 
            array (
                'id' => 155,
                'estado_id' => 10,
                'ciudad' => 'CAPATÁRIDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            90 => 
            array (
                'id' => 156,
                'estado_id' => 10,
                'ciudad' => 'CHICHIRIVICHE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            91 => 
            array (
                'id' => 157,
                'estado_id' => 10,
                'ciudad' => 'CHURUGUARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            92 => 
            array (
                'id' => 159,
                'estado_id' => 10,
                'ciudad' => 'CUMAREBO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            93 => 
            array (
                'id' => 160,
                'estado_id' => 10,
                'ciudad' => 'DABAJURO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            94 => 
            array (
                'id' => 161,
                'estado_id' => 10,
                'ciudad' => 'JUDIBANA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            95 => 
            array (
                'id' => 162,
                'estado_id' => 10,
                'ciudad' => 'LA CRUZ DE TARATARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            96 => 
            array (
                'id' => 163,
                'estado_id' => 10,
                'ciudad' => 'LA VELA DE CORO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            97 => 
            array (
                'id' => 164,
                'estado_id' => 10,
                'ciudad' => 'LOS TAQUES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            98 => 
            array (
                'id' => 165,
                'estado_id' => 10,
                'ciudad' => 'MAPARARI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            99 => 
            array (
                'id' => 166,
                'estado_id' => 10,
                'ciudad' => 'MENE DE MAUROA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            100 => 
            array (
                'id' => 167,
                'estado_id' => 10,
                'ciudad' => 'MIRIMIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            101 => 
            array (
                'id' => 168,
                'estado_id' => 10,
                'ciudad' => 'PEDREGAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            102 => 
            array (
                'id' => 169,
                'estado_id' => 10,
                'ciudad' => 'PÍRITU FALCÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            103 => 
            array (
                'id' => 170,
                'estado_id' => 10,
                'ciudad' => 'PUEBLO NUEVO FALCÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            104 => 
            array (
                'id' => 171,
                'estado_id' => 10,
                'ciudad' => 'PUERTO CUMAREBO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            105 => 
            array (
                'id' => 172,
                'estado_id' => 10,
                'ciudad' => 'PUNTA CARDÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            106 => 
            array (
                'id' => 173,
                'estado_id' => 10,
                'ciudad' => 'PUNTO FIJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            107 => 
            array (
                'id' => 174,
                'estado_id' => 10,
                'ciudad' => 'SAN JUAN DE LOS CAYOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            108 => 
            array (
                'id' => 175,
                'estado_id' => 10,
                'ciudad' => 'SAN LUIS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            109 => 
            array (
                'id' => 176,
                'estado_id' => 10,
                'ciudad' => 'SANTA ANA FALCÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            110 => 
            array (
                'id' => 177,
                'estado_id' => 10,
                'ciudad' => 'SANTA CRUZ DE BUCARAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            111 => 
            array (
                'id' => 178,
                'estado_id' => 10,
                'ciudad' => 'TOCOPERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            112 => 
            array (
                'id' => 179,
                'estado_id' => 10,
                'ciudad' => 'TOCUYO DE LA COSTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            113 => 
            array (
                'id' => 180,
                'estado_id' => 10,
                'ciudad' => 'TUCACAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            114 => 
            array (
                'id' => 181,
                'estado_id' => 10,
                'ciudad' => 'YARACAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            115 => 
            array (
                'id' => 182,
                'estado_id' => 11,
                'ciudad' => 'ALTAGRACIA DE ORITUCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            116 => 
            array (
                'id' => 183,
                'estado_id' => 11,
                'ciudad' => 'CABRUTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            117 => 
            array (
                'id' => 184,
                'estado_id' => 11,
                'ciudad' => 'CALABOZO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            118 => 
            array (
                'id' => 185,
                'estado_id' => 11,
                'ciudad' => 'CAMAGUÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            119 => 
            array (
                'id' => 196,
                'estado_id' => 11,
                'ciudad' => 'CHAGUARAMAS GUÁRICO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            120 => 
            array (
                'id' => 197,
                'estado_id' => 11,
                'ciudad' => 'EL SOCORRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            121 => 
            array (
                'id' => 198,
                'estado_id' => 11,
                'ciudad' => 'EL SOMBRERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            122 => 
            array (
                'id' => 199,
                'estado_id' => 11,
                'ciudad' => 'LAS MERCEDES DE LOS LLANOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            123 => 
            array (
                'id' => 200,
                'estado_id' => 11,
                'ciudad' => 'LEZAMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            124 => 
            array (
                'id' => 201,
                'estado_id' => 11,
                'ciudad' => 'ONOTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            125 => 
            array (
                'id' => 202,
                'estado_id' => 11,
                'ciudad' => 'ORTÍZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            126 => 
            array (
                'id' => 203,
                'estado_id' => 11,
                'ciudad' => 'SAN JOSÉ DE GUARIBE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            127 => 
            array (
                'id' => 205,
                'estado_id' => 11,
                'ciudad' => 'SAN RAFAEL DE LAYA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            128 => 
            array (
                'id' => 206,
                'estado_id' => 11,
                'ciudad' => 'SANTA MARÍA DE IPIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            129 => 
            array (
                'id' => 207,
                'estado_id' => 11,
                'ciudad' => 'TUCUPIDO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            130 => 
            array (
                'id' => 208,
                'estado_id' => 11,
                'ciudad' => 'VALLE DE LA PASCUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            131 => 
            array (
                'id' => 209,
                'estado_id' => 11,
                'ciudad' => 'ZARAZA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            132 => 
            array (
                'id' => 210,
                'estado_id' => 12,
                'ciudad' => 'AGUADA GRANDE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            133 => 
            array (
                'id' => 211,
                'estado_id' => 12,
                'ciudad' => 'ATARIGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            134 => 
            array (
                'id' => 213,
                'estado_id' => 12,
                'ciudad' => 'BOBARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            135 => 
            array (
                'id' => 214,
                'estado_id' => 12,
                'ciudad' => 'CABUDARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            136 => 
            array (
                'id' => 215,
                'estado_id' => 12,
                'ciudad' => 'CARORA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            137 => 
            array (
                'id' => 261,
                'estado_id' => 13,
                'ciudad' => 'ZEA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            138 => 
            array (
                'id' => 216,
                'estado_id' => 12,
                'ciudad' => 'CUBIRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            139 => 
            array (
                'id' => 217,
                'estado_id' => 12,
                'ciudad' => 'CUJÍ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            140 => 
            array (
                'id' => 218,
                'estado_id' => 12,
                'ciudad' => 'DUACA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            141 => 
            array (
                'id' => 219,
                'estado_id' => 12,
                'ciudad' => 'EL MANZANO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            142 => 
            array (
                'id' => 220,
                'estado_id' => 12,
                'ciudad' => 'EL TOCUYO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            143 => 
            array (
                'id' => 221,
                'estado_id' => 12,
                'ciudad' => 'GUARÍCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            144 => 
            array (
                'id' => 222,
                'estado_id' => 12,
                'ciudad' => 'HUMOCARO ALTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            145 => 
            array (
                'id' => 223,
                'estado_id' => 12,
                'ciudad' => 'HUMOCARO BAJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            146 => 
            array (
                'id' => 224,
                'estado_id' => 12,
                'ciudad' => 'LA MIEL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            147 => 
            array (
                'id' => 225,
                'estado_id' => 12,
                'ciudad' => 'MOROTURO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            148 => 
            array (
                'id' => 226,
                'estado_id' => 12,
                'ciudad' => 'QUÍBOR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            149 => 
            array (
                'id' => 227,
                'estado_id' => 12,
                'ciudad' => 'RÍO CLARO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            150 => 
            array (
                'id' => 228,
                'estado_id' => 12,
                'ciudad' => 'SANARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            151 => 
            array (
                'id' => 229,
                'estado_id' => 12,
                'ciudad' => 'SANTA INÉS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            152 => 
            array (
                'id' => 230,
                'estado_id' => 12,
                'ciudad' => 'SARARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            153 => 
            array (
                'id' => 231,
                'estado_id' => 12,
                'ciudad' => 'SIQUISIQUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            154 => 
            array (
                'id' => 232,
                'estado_id' => 12,
                'ciudad' => 'TINTORERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            155 => 
            array (
                'id' => 233,
                'estado_id' => 13,
                'ciudad' => 'APARTADEROS MÉRIDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            156 => 
            array (
                'id' => 234,
                'estado_id' => 13,
                'ciudad' => 'ARAPUEY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            157 => 
            array (
                'id' => 235,
                'estado_id' => 13,
                'ciudad' => 'BAILADORES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            158 => 
            array (
                'id' => 236,
                'estado_id' => 13,
                'ciudad' => 'CAJA SECA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            159 => 
            array (
                'id' => 237,
                'estado_id' => 13,
                'ciudad' => 'CANAGUÁ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            160 => 
            array (
                'id' => 238,
                'estado_id' => 13,
                'ciudad' => 'CHACHOPO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            161 => 
            array (
                'id' => 239,
                'estado_id' => 13,
                'ciudad' => 'CHIGUARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            162 => 
            array (
                'id' => 240,
                'estado_id' => 13,
                'ciudad' => 'EJIDO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            163 => 
            array (
                'id' => 241,
                'estado_id' => 13,
                'ciudad' => 'EL VIGÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            164 => 
            array (
                'id' => 242,
                'estado_id' => 13,
                'ciudad' => 'LA AZULITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            165 => 
            array (
                'id' => 243,
                'estado_id' => 13,
                'ciudad' => 'LA PLAYA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            166 => 
            array (
                'id' => 244,
                'estado_id' => 13,
                'ciudad' => 'LAGUNILLAS MÉRIDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            167 => 
            array (
                'id' => 246,
                'estado_id' => 13,
                'ciudad' => 'MESA DE BOLÍVAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            168 => 
            array (
                'id' => 247,
                'estado_id' => 13,
                'ciudad' => 'MUCUCHÍES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            169 => 
            array (
                'id' => 248,
                'estado_id' => 13,
                'ciudad' => 'MUCUJEPE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            170 => 
            array (
                'id' => 249,
                'estado_id' => 13,
                'ciudad' => 'MUCURUBA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            171 => 
            array (
                'id' => 250,
                'estado_id' => 13,
                'ciudad' => 'NUEVA BOLIVIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            172 => 
            array (
                'id' => 251,
                'estado_id' => 13,
                'ciudad' => 'PALMARITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            173 => 
            array (
                'id' => 252,
                'estado_id' => 13,
                'ciudad' => 'PUEBLO LLANO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            174 => 
            array (
                'id' => 253,
                'estado_id' => 13,
                'ciudad' => 'SANTA CRUZ DE MORA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            175 => 
            array (
                'id' => 254,
                'estado_id' => 13,
                'ciudad' => 'SANTA ELENA DE ARENALES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            176 => 
            array (
                'id' => 255,
                'estado_id' => 13,
                'ciudad' => 'SANTO DOMINGO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            177 => 
            array (
                'id' => 256,
                'estado_id' => 13,
                'ciudad' => 'TABÁY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            178 => 
            array (
                'id' => 257,
                'estado_id' => 13,
                'ciudad' => 'TIMOTES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            179 => 
            array (
                'id' => 258,
                'estado_id' => 13,
                'ciudad' => 'TORONDOY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            180 => 
            array (
                'id' => 265,
                'estado_id' => 14,
                'ciudad' => 'CHAGUARAMAS MIRANDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            181 => 
            array (
                'id' => 266,
                'estado_id' => 14,
                'ciudad' => 'CHARALLAVE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            182 => 
            array (
                'id' => 267,
                'estado_id' => 14,
                'ciudad' => 'CHIRIMENA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            183 => 
            array (
                'id' => 268,
                'estado_id' => 14,
                'ciudad' => 'CHUSPA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            184 => 
            array (
                'id' => 269,
                'estado_id' => 14,
                'ciudad' => 'CÚA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            185 => 
            array (
                'id' => 270,
                'estado_id' => 14,
                'ciudad' => 'CUPIRA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            186 => 
            array (
                'id' => 271,
                'estado_id' => 14,
                'ciudad' => 'CURIEPE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            187 => 
            array (
                'id' => 272,
                'estado_id' => 14,
                'ciudad' => 'EL GUAPO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            188 => 
            array (
                'id' => 273,
                'estado_id' => 14,
                'ciudad' => 'EL JARILLO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            189 => 
            array (
                'id' => 274,
                'estado_id' => 14,
                'ciudad' => 'FILAS DE MARICHE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            190 => 
            array (
                'id' => 275,
                'estado_id' => 14,
                'ciudad' => 'GUARENAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            191 => 
            array (
                'id' => 276,
                'estado_id' => 14,
                'ciudad' => 'GUATIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            192 => 
            array (
                'id' => 277,
                'estado_id' => 14,
                'ciudad' => 'HIGUEROTE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            193 => 
            array (
                'id' => 278,
                'estado_id' => 14,
                'ciudad' => 'LOS ANAUCOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            194 => 
            array (
                'id' => 280,
                'estado_id' => 14,
                'ciudad' => 'OCUMARE DEL TUY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            195 => 
            array (
                'id' => 281,
                'estado_id' => 14,
                'ciudad' => 'PANAQUIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            196 => 
            array (
                'id' => 282,
                'estado_id' => 14,
                'ciudad' => 'PARACOTOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            197 => 
            array (
                'id' => 283,
                'estado_id' => 14,
                'ciudad' => 'RÍO CHICO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            198 => 
            array (
                'id' => 284,
                'estado_id' => 14,
                'ciudad' => 'SAN ANTONIO DE LOS ALTOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            199 => 
            array (
                'id' => 285,
                'estado_id' => 14,
                'ciudad' => 'SAN DIEGO DE LOS ALTOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            200 => 
            array (
                'id' => 286,
                'estado_id' => 14,
                'ciudad' => 'SAN FERNANDO DEL GUAPO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            201 => 
            array (
                'id' => 287,
                'estado_id' => 14,
                'ciudad' => 'SAN FRANCISCO DE YARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            202 => 
            array (
                'id' => 288,
                'estado_id' => 14,
                'ciudad' => 'SAN JOSÉ DE LOS ALTOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            203 => 
            array (
                'id' => 289,
                'estado_id' => 14,
                'ciudad' => 'SAN JOSÉ DE RÍO CHICO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            204 => 
            array (
                'id' => 290,
                'estado_id' => 14,
                'ciudad' => 'SAN PEDRO DE LOS ALTOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            205 => 
            array (
                'id' => 291,
                'estado_id' => 14,
                'ciudad' => 'SANTA LUCÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            206 => 
            array (
                'id' => 292,
                'estado_id' => 14,
                'ciudad' => 'SANTA TERESA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            207 => 
            array (
                'id' => 293,
                'estado_id' => 14,
                'ciudad' => 'TACARIGUA DE LA LAGUNA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            208 => 
            array (
                'id' => 294,
                'estado_id' => 14,
                'ciudad' => 'TACARIGUA DE MAMPORAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            209 => 
            array (
                'id' => 295,
                'estado_id' => 14,
                'ciudad' => 'TÁCATA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            210 => 
            array (
                'id' => 296,
                'estado_id' => 14,
                'ciudad' => 'TURUMO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            211 => 
            array (
                'id' => 297,
                'estado_id' => 15,
                'ciudad' => 'AGUASAY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            212 => 
            array (
                'id' => 298,
                'estado_id' => 15,
                'ciudad' => 'ARAGUA DE MATURÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            213 => 
            array (
                'id' => 299,
                'estado_id' => 15,
                'ciudad' => 'BARRANCAS DEL ORINOCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            214 => 
            array (
                'id' => 300,
                'estado_id' => 15,
                'ciudad' => 'CAICARA DE MATURÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            215 => 
            array (
                'id' => 301,
                'estado_id' => 15,
                'ciudad' => 'CARIPE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            216 => 
            array (
                'id' => 302,
                'estado_id' => 15,
                'ciudad' => 'CARIPITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            217 => 
            array (
                'id' => 303,
                'estado_id' => 15,
                'ciudad' => 'CHAGUARAMAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            218 => 
            array (
                'id' => 305,
                'estado_id' => 15,
                'ciudad' => 'CHAGUARAMAS MONAGAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            219 => 
            array (
                'id' => 307,
                'estado_id' => 15,
                'ciudad' => 'EL FURRIAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            220 => 
            array (
                'id' => 308,
                'estado_id' => 15,
                'ciudad' => 'EL TEJERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            221 => 
            array (
                'id' => 309,
                'estado_id' => 15,
                'ciudad' => 'JUSEPÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            222 => 
            array (
                'id' => 310,
                'estado_id' => 15,
                'ciudad' => 'LA TOSCANA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            223 => 
            array (
                'id' => 312,
                'estado_id' => 15,
                'ciudad' => 'MIRAFLORES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            224 => 
            array (
                'id' => 313,
                'estado_id' => 15,
                'ciudad' => 'PUNTA DE MATA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            225 => 
            array (
                'id' => 314,
                'estado_id' => 15,
                'ciudad' => 'QUIRIQUIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            226 => 
            array (
                'id' => 315,
                'estado_id' => 15,
                'ciudad' => 'SAN ANTONIO DE MATURÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            227 => 
            array (
                'id' => 316,
                'estado_id' => 15,
                'ciudad' => 'SAN VICENTE MONAGAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            228 => 
            array (
                'id' => 317,
                'estado_id' => 15,
                'ciudad' => 'SANTA BÁRBARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            229 => 
            array (
                'id' => 318,
                'estado_id' => 15,
                'ciudad' => 'TEMBLADOR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            230 => 
            array (
                'id' => 319,
                'estado_id' => 15,
                'ciudad' => 'TERESEN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            231 => 
            array (
                'id' => 104,
                'estado_id' => 6,
                'ciudad' => 'UNARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            232 => 
            array (
                'id' => 320,
                'estado_id' => 15,
                'ciudad' => 'URACOA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            233 => 
            array (
                'id' => 321,
                'estado_id' => 16,
                'ciudad' => 'ALTAGRACIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            234 => 
            array (
                'id' => 322,
                'estado_id' => 16,
                'ciudad' => 'BOCA DE POZO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            235 => 
            array (
                'id' => 323,
                'estado_id' => 16,
                'ciudad' => 'BOCA DE RÍO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            236 => 
            array (
                'id' => 324,
                'estado_id' => 16,
                'ciudad' => 'EL ESPINAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            237 => 
            array (
                'id' => 325,
                'estado_id' => 16,
                'ciudad' => 'EL VALLE DEL ESPÍRITU SANTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            238 => 
            array (
                'id' => 326,
                'estado_id' => 16,
                'ciudad' => 'EL YAQUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            239 => 
            array (
                'id' => 327,
                'estado_id' => 16,
                'ciudad' => 'JUANGRIEGO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            240 => 
            array (
                'id' => 329,
                'estado_id' => 16,
                'ciudad' => 'LA GUARDIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            241 => 
            array (
                'id' => 330,
                'estado_id' => 16,
                'ciudad' => 'PAMPATAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            242 => 
            array (
                'id' => 331,
                'estado_id' => 16,
                'ciudad' => 'PORLAMAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            243 => 
            array (
                'id' => 332,
                'estado_id' => 16,
                'ciudad' => 'PUERTO FERMÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            244 => 
            array (
                'id' => 333,
                'estado_id' => 16,
                'ciudad' => 'PUNTA DE PIEDRAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            245 => 
            array (
                'id' => 334,
                'estado_id' => 16,
                'ciudad' => 'SAN FRANCISCO DE MACANAO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            246 => 
            array (
                'id' => 335,
                'estado_id' => 16,
                'ciudad' => 'SAN JUAN BAUTISTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            247 => 
            array (
                'id' => 336,
                'estado_id' => 16,
                'ciudad' => 'SAN PEDRO DE COCHE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            248 => 
            array (
                'id' => 337,
                'estado_id' => 16,
                'ciudad' => 'SANTA ANA DE NUEVA ESPARTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            249 => 
            array (
                'id' => 338,
                'estado_id' => 16,
                'ciudad' => 'VILLA ROSA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            250 => 
            array (
                'id' => 339,
                'estado_id' => 17,
                'ciudad' => 'ACARIGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            251 => 
            array (
                'id' => 340,
                'estado_id' => 17,
                'ciudad' => 'AGUA BLANCA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            252 => 
            array (
                'id' => 341,
                'estado_id' => 17,
                'ciudad' => 'ARAURE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            253 => 
            array (
                'id' => 342,
                'estado_id' => 17,
                'ciudad' => 'BISCUCUY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            254 => 
            array (
                'id' => 343,
                'estado_id' => 17,
                'ciudad' => 'BOCONOITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            255 => 
            array (
                'id' => 344,
                'estado_id' => 17,
                'ciudad' => 'CAMPO ELÍAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            256 => 
            array (
                'id' => 345,
                'estado_id' => 17,
                'ciudad' => 'CHABASQUÉN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            257 => 
            array (
                'id' => 347,
                'estado_id' => 17,
                'ciudad' => 'GUANARITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            258 => 
            array (
                'id' => 348,
                'estado_id' => 17,
                'ciudad' => 'LA APARICIÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            259 => 
            array (
                'id' => 349,
                'estado_id' => 17,
                'ciudad' => 'LA MISIÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            260 => 
            array (
                'id' => 350,
                'estado_id' => 17,
                'ciudad' => 'MESA DE CAVACAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            261 => 
            array (
                'id' => 351,
                'estado_id' => 17,
                'ciudad' => 'OSPINO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            262 => 
            array (
                'id' => 352,
                'estado_id' => 17,
                'ciudad' => 'PAPELÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            263 => 
            array (
                'id' => 353,
                'estado_id' => 17,
                'ciudad' => 'PAYARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            264 => 
            array (
                'id' => 354,
                'estado_id' => 17,
                'ciudad' => 'PIMPINELA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            265 => 
            array (
                'id' => 355,
                'estado_id' => 17,
                'ciudad' => 'PÍRITU DE PORTUGUESA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            266 => 
            array (
                'id' => 356,
                'estado_id' => 17,
                'ciudad' => 'SAN RAFAEL DE ONOTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            267 => 
            array (
                'id' => 357,
                'estado_id' => 17,
                'ciudad' => 'SANTA ROSALÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            268 => 
            array (
                'id' => 358,
                'estado_id' => 17,
                'ciudad' => 'TURÉN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            269 => 
            array (
                'id' => 359,
                'estado_id' => 18,
                'ciudad' => 'ALTOS DE SUCRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            270 => 
            array (
                'id' => 360,
                'estado_id' => 18,
                'ciudad' => 'ARAYA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            271 => 
            array (
                'id' => 361,
                'estado_id' => 18,
                'ciudad' => 'CARIACO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            272 => 
            array (
                'id' => 362,
                'estado_id' => 18,
                'ciudad' => 'CARÚPANO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            273 => 
            array (
                'id' => 363,
                'estado_id' => 18,
                'ciudad' => 'CASANAY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            274 => 
            array (
                'id' => 365,
                'estado_id' => 18,
                'ciudad' => 'CUMANACOA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            275 => 
            array (
                'id' => 366,
                'estado_id' => 18,
                'ciudad' => 'EL MORRO PUERTO SANTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            276 => 
            array (
                'id' => 367,
                'estado_id' => 18,
                'ciudad' => 'EL PILAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            277 => 
            array (
                'id' => 368,
                'estado_id' => 18,
                'ciudad' => 'EL POBLADO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            278 => 
            array (
                'id' => 369,
                'estado_id' => 18,
                'ciudad' => 'GUACA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            279 => 
            array (
                'id' => 370,
                'estado_id' => 18,
                'ciudad' => 'GUIRIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            280 => 
            array (
                'id' => 371,
                'estado_id' => 18,
                'ciudad' => 'IRAPA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            281 => 
            array (
                'id' => 372,
                'estado_id' => 18,
                'ciudad' => 'MANICUARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            282 => 
            array (
                'id' => 373,
                'estado_id' => 18,
                'ciudad' => 'MARIGUITAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            283 => 
            array (
                'id' => 374,
                'estado_id' => 18,
                'ciudad' => 'RÍO CARIBE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            284 => 
            array (
                'id' => 375,
                'estado_id' => 18,
                'ciudad' => 'SAN ANTONIO DEL GOLFO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            285 => 
            array (
                'id' => 376,
                'estado_id' => 18,
                'ciudad' => 'SAN JOSÉ DE AEROCUAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            286 => 
            array (
                'id' => 377,
                'estado_id' => 18,
                'ciudad' => 'SAN VICENTE DE SUCRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            287 => 
            array (
                'id' => 378,
                'estado_id' => 18,
                'ciudad' => 'SANTA FE DE SUCRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            288 => 
            array (
                'id' => 379,
                'estado_id' => 18,
                'ciudad' => 'TUNAPUY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            289 => 
            array (
                'id' => 380,
                'estado_id' => 18,
                'ciudad' => 'YAGUARAPARO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            290 => 
            array (
                'id' => 381,
                'estado_id' => 18,
                'ciudad' => 'YOCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            291 => 
            array (
                'id' => 382,
                'estado_id' => 19,
                'ciudad' => 'ABEJALES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            292 => 
            array (
                'id' => 383,
                'estado_id' => 19,
                'ciudad' => 'BOROTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            293 => 
            array (
                'id' => 384,
                'estado_id' => 19,
                'ciudad' => 'BRAMON',
                'capital' => false,
                'usuario_id' => 1,
            ),
            294 => 
            array (
                'id' => 385,
                'estado_id' => 19,
                'ciudad' => 'CAPACHO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            295 => 
            array (
                'id' => 386,
                'estado_id' => 19,
                'ciudad' => 'COLÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            296 => 
            array (
                'id' => 387,
                'estado_id' => 19,
                'ciudad' => 'COLONCITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            297 => 
            array (
                'id' => 388,
                'estado_id' => 19,
                'ciudad' => 'CORDERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            298 => 
            array (
                'id' => 389,
                'estado_id' => 19,
                'ciudad' => 'EL COBRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            299 => 
            array (
                'id' => 390,
                'estado_id' => 19,
                'ciudad' => 'EL PINAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            300 => 
            array (
                'id' => 391,
                'estado_id' => 19,
                'ciudad' => 'INDEPENDENCIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            301 => 
            array (
                'id' => 392,
                'estado_id' => 19,
                'ciudad' => 'LA FRÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            302 => 
            array (
                'id' => 393,
                'estado_id' => 19,
                'ciudad' => 'LA GRITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            303 => 
            array (
                'id' => 394,
                'estado_id' => 19,
                'ciudad' => 'LA PEDRERA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            304 => 
            array (
                'id' => 395,
                'estado_id' => 19,
                'ciudad' => 'LA TENDIDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            305 => 
            array (
                'id' => 396,
                'estado_id' => 19,
                'ciudad' => 'LAS DELICIAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            306 => 
            array (
                'id' => 397,
                'estado_id' => 19,
                'ciudad' => 'LAS HERNÁNDEZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            307 => 
            array (
                'id' => 398,
                'estado_id' => 19,
                'ciudad' => 'LOBATERA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            308 => 
            array (
                'id' => 399,
                'estado_id' => 19,
                'ciudad' => 'MICHELENA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            309 => 
            array (
                'id' => 400,
                'estado_id' => 19,
                'ciudad' => 'PALMIRA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            310 => 
            array (
                'id' => 401,
                'estado_id' => 19,
                'ciudad' => 'PREGONERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            311 => 
            array (
                'id' => 402,
                'estado_id' => 19,
                'ciudad' => 'QUENIQUEA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            312 => 
            array (
                'id' => 403,
                'estado_id' => 19,
                'ciudad' => 'RUBIO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            313 => 
            array (
                'id' => 404,
                'estado_id' => 19,
                'ciudad' => 'SAN ANTONIO DEL TACHIRA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            314 => 
            array (
                'id' => 406,
                'estado_id' => 19,
                'ciudad' => 'SAN JOSÉ DE BOLÍVAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            315 => 
            array (
                'id' => 430,
                'estado_id' => 20,
                'ciudad' => 'MENDOZA FRÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            316 => 
            array (
                'id' => 431,
                'estado_id' => 20,
                'ciudad' => 'MESETA DE CHIMPIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            317 => 
            array (
                'id' => 433,
                'estado_id' => 20,
                'ciudad' => 'MOTATÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            318 => 
            array (
                'id' => 434,
                'estado_id' => 20,
                'ciudad' => 'PAMPÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            319 => 
            array (
                'id' => 435,
                'estado_id' => 20,
                'ciudad' => 'PAMPANITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            320 => 
            array (
                'id' => 436,
                'estado_id' => 20,
                'ciudad' => 'SABANA DE MENDOZA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            321 => 
            array (
                'id' => 437,
                'estado_id' => 20,
                'ciudad' => 'SAN LÁZARO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            322 => 
            array (
                'id' => 438,
                'estado_id' => 20,
                'ciudad' => 'SANTA ANA DE TRUJILLO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            323 => 
            array (
                'id' => 439,
                'estado_id' => 20,
                'ciudad' => 'TOSTÓS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            324 => 
            array (
                'id' => 441,
                'estado_id' => 20,
                'ciudad' => 'VALERA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            325 => 
            array (
                'id' => 442,
                'estado_id' => 21,
                'ciudad' => 'CARAYACA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            326 => 
            array (
                'id' => 443,
                'estado_id' => 21,
                'ciudad' => 'LITORAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            327 => 
            array (
                'id' => 444,
                'estado_id' => 25,
                'ciudad' => 'ARCHIPIÉLAGO LOS ROQUES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            328 => 
            array (
                'id' => 445,
                'estado_id' => 22,
                'ciudad' => 'AROA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            329 => 
            array (
                'id' => 446,
                'estado_id' => 22,
                'ciudad' => 'BORAURE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            330 => 
            array (
                'id' => 447,
                'estado_id' => 22,
                'ciudad' => 'CAMPO ELÍAS DE YARACUY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            331 => 
            array (
                'id' => 448,
                'estado_id' => 22,
                'ciudad' => 'CHIVACOA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            332 => 
            array (
                'id' => 449,
                'estado_id' => 22,
                'ciudad' => 'COCOROTE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            333 => 
            array (
                'id' => 450,
                'estado_id' => 22,
                'ciudad' => 'FARRIAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            334 => 
            array (
                'id' => 451,
                'estado_id' => 22,
                'ciudad' => 'GUAMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            335 => 
            array (
                'id' => 452,
                'estado_id' => 22,
                'ciudad' => 'MARÍN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            336 => 
            array (
                'id' => 453,
                'estado_id' => 22,
                'ciudad' => 'NIRGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            337 => 
            array (
                'id' => 454,
                'estado_id' => 22,
                'ciudad' => 'SABANA DE PARRA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            338 => 
            array (
                'id' => 455,
                'estado_id' => 22,
                'ciudad' => 'SALOM',
                'capital' => false,
                'usuario_id' => 1,
            ),
            339 => 
            array (
                'id' => 457,
                'estado_id' => 22,
                'ciudad' => 'SAN PABLO DE YARACUY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            340 => 
            array (
                'id' => 458,
                'estado_id' => 22,
                'ciudad' => 'URACHICHE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            341 => 
            array (
                'id' => 459,
                'estado_id' => 22,
                'ciudad' => 'YARITAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            342 => 
            array (
                'id' => 460,
                'estado_id' => 22,
                'ciudad' => 'YUMARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            343 => 
            array (
                'id' => 461,
                'estado_id' => 23,
                'ciudad' => 'BACHAQUERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            344 => 
            array (
                'id' => 462,
                'estado_id' => 23,
                'ciudad' => 'BOBURES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            345 => 
            array (
                'id' => 463,
                'estado_id' => 23,
                'ciudad' => 'CABIMAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            346 => 
            array (
                'id' => 464,
                'estado_id' => 23,
                'ciudad' => 'CAMPO CONCEPCIÓN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            347 => 
            array (
                'id' => 465,
                'estado_id' => 23,
                'ciudad' => 'CAMPO MARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            348 => 
            array (
                'id' => 466,
                'estado_id' => 23,
                'ciudad' => 'CAMPO ROJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            349 => 
            array (
                'id' => 467,
                'estado_id' => 23,
                'ciudad' => 'CARRASQUERO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            350 => 
            array (
                'id' => 468,
                'estado_id' => 23,
                'ciudad' => 'CASIGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            351 => 
            array (
                'id' => 469,
                'estado_id' => 23,
                'ciudad' => 'CHIQUINQUIRÁ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            352 => 
            array (
                'id' => 470,
                'estado_id' => 23,
                'ciudad' => 'CIUDAD OJEDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            353 => 
            array (
                'id' => 471,
                'estado_id' => 23,
                'ciudad' => 'EL BATEY',
                'capital' => false,
                'usuario_id' => 1,
            ),
            354 => 
            array (
                'id' => 472,
                'estado_id' => 23,
                'ciudad' => 'EL CARMELO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            355 => 
            array (
                'id' => 473,
                'estado_id' => 23,
                'ciudad' => 'EL CHIVO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            356 => 
            array (
                'id' => 474,
                'estado_id' => 23,
                'ciudad' => 'EL GUAYABO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            357 => 
            array (
                'id' => 475,
                'estado_id' => 23,
                'ciudad' => 'EL MENE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            358 => 
            array (
                'id' => 476,
                'estado_id' => 23,
                'ciudad' => 'EL VENADO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            359 => 
            array (
                'id' => 477,
                'estado_id' => 23,
                'ciudad' => 'ENCONTRADOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            360 => 
            array (
                'id' => 478,
                'estado_id' => 23,
                'ciudad' => 'GIBRALTAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            361 => 
            array (
                'id' => 479,
                'estado_id' => 23,
                'ciudad' => 'ISLA DE TOAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            362 => 
            array (
                'id' => 480,
                'estado_id' => 23,
                'ciudad' => 'LA CONCEPCIÓN DEL ZULIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            363 => 
            array (
                'id' => 481,
                'estado_id' => 23,
                'ciudad' => 'LA PAZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            364 => 
            array (
                'id' => 482,
                'estado_id' => 23,
                'ciudad' => 'LA SIERRITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            365 => 
            array (
                'id' => 483,
                'estado_id' => 23,
                'ciudad' => 'LAGUNILLAS DEL ZULIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            366 => 
            array (
                'id' => 484,
                'estado_id' => 23,
                'ciudad' => 'LAS PIEDRAS DE PERIJÁ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            367 => 
            array (
                'id' => 485,
                'estado_id' => 23,
                'ciudad' => 'LOS CORTIJOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            368 => 
            array (
                'id' => 486,
                'estado_id' => 23,
                'ciudad' => 'MACHIQUES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            369 => 
            array (
                'id' => 488,
                'estado_id' => 23,
                'ciudad' => 'MENE GRANDE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            370 => 
            array (
                'id' => 489,
                'estado_id' => 23,
                'ciudad' => 'PALMAREJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            371 => 
            array (
                'id' => 490,
                'estado_id' => 23,
                'ciudad' => 'PARAGUAIPOA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            372 => 
            array (
                'id' => 491,
                'estado_id' => 23,
                'ciudad' => 'POTRERITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            373 => 
            array (
                'id' => 492,
                'estado_id' => 23,
                'ciudad' => 'PUEBLO NUEVO DEL ZULIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            374 => 
            array (
                'id' => 493,
                'estado_id' => 23,
                'ciudad' => 'PUERTOS DE ALTAGRACIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            375 => 
            array (
                'id' => 494,
                'estado_id' => 23,
                'ciudad' => 'PUNTA GORDA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            376 => 
            array (
                'id' => 346,
                'estado_id' => 17,
                'ciudad' => 'GUANARE',
                'capital' => true,
                'usuario_id' => 1,
            ),
            377 => 
            array (
                'id' => 495,
                'estado_id' => 23,
                'ciudad' => 'SABANETA DE PALMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            378 => 
            array (
                'id' => 496,
                'estado_id' => 23,
                'ciudad' => 'SAN FRANCISCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            379 => 
            array (
                'id' => 497,
                'estado_id' => 23,
                'ciudad' => 'SAN JOSÉ DE PERIJÁ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            380 => 
            array (
                'id' => 498,
                'estado_id' => 23,
                'ciudad' => 'SAN RAFAEL DEL MOJÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            381 => 
            array (
                'id' => 499,
                'estado_id' => 23,
                'ciudad' => 'SAN TIMOTEO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            382 => 
            array (
                'id' => 500,
                'estado_id' => 23,
                'ciudad' => 'SANTA BÁRBARA DEL ZULIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            383 => 
            array (
                'id' => 501,
                'estado_id' => 23,
                'ciudad' => 'SANTA CRUZ DE MARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            384 => 
            array (
                'id' => 502,
                'estado_id' => 23,
                'ciudad' => 'SANTA CRUZ DEL ZULIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            385 => 
            array (
                'id' => 503,
                'estado_id' => 23,
                'ciudad' => 'SANTA RITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            386 => 
            array (
                'id' => 504,
                'estado_id' => 23,
                'ciudad' => 'SINAMAICA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            387 => 
            array (
                'id' => 505,
                'estado_id' => 23,
                'ciudad' => 'TAMARE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            388 => 
            array (
                'id' => 506,
                'estado_id' => 23,
                'ciudad' => 'TÍA JUANA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            389 => 
            array (
                'id' => 507,
                'estado_id' => 23,
                'ciudad' => 'VILLA DEL ROSARIO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            390 => 
            array (
                'id' => 509,
                'estado_id' => 21,
                'ciudad' => 'CATIA LA MAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            391 => 
            array (
                'id' => 510,
                'estado_id' => 21,
                'ciudad' => 'MACUTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            392 => 
            array (
                'id' => 511,
                'estado_id' => 21,
                'ciudad' => 'NAIGUATÁ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            393 => 
            array (
                'id' => 512,
                'estado_id' => 25,
                'ciudad' => 'ARCHIPIÉLAGO LOS MONJES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            394 => 
            array (
                'id' => 513,
                'estado_id' => 25,
                'ciudad' => 'ISLA LA TORTUGA Y CAYOS ADYACENTES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            395 => 
            array (
                'id' => 514,
                'estado_id' => 25,
                'ciudad' => 'ISLA LA SOLA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            396 => 
            array (
                'id' => 515,
                'estado_id' => 25,
                'ciudad' => 'ISLAS LOS TESTIGOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            397 => 
            array (
                'id' => 516,
                'estado_id' => 25,
                'ciudad' => 'ISLAS LOS FRAILES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            398 => 
            array (
                'id' => 517,
                'estado_id' => 25,
                'ciudad' => 'ISLA LA ORCHILA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            399 => 
            array (
                'id' => 518,
                'estado_id' => 25,
                'ciudad' => 'ARCHIPIÉLAGO LAS AVES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            400 => 
            array (
                'id' => 519,
                'estado_id' => 25,
                'ciudad' => 'ISLA DE AVES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            401 => 
            array (
                'id' => 520,
                'estado_id' => 25,
                'ciudad' => 'ISLA LA BLANQUILLA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            402 => 
            array (
                'id' => 521,
                'estado_id' => 25,
                'ciudad' => 'ISLA DE PATOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            403 => 
            array (
                'id' => 522,
                'estado_id' => 25,
                'ciudad' => 'ISLAS LOS HERMANOS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            404 => 
            array (
                'id' => 2,
                'estado_id' => 1,
                'ciudad' => 'PUERTO AYACUCHO',
                'capital' => true,
                'usuario_id' => 1,
            ),
            405 => 
            array (
                'id' => 6,
                'estado_id' => 2,
                'ciudad' => 'BARCELONA',
                'capital' => true,
                'usuario_id' => 1,
            ),
            406 => 
            array (
                'id' => 52,
                'estado_id' => 3,
                'ciudad' => 'SAN FERNANDO DE APURE',
                'capital' => true,
                'usuario_id' => 1,
            ),
            407 => 
            array (
                'id' => 64,
                'estado_id' => 4,
                'ciudad' => 'MARACAY',
                'capital' => true,
                'usuario_id' => 1,
            ),
            408 => 
            array (
                'id' => 75,
                'estado_id' => 5,
                'ciudad' => 'BARINAS',
                'capital' => true,
                'usuario_id' => 1,
            ),
            409 => 
            array (
                'id' => 89,
                'estado_id' => 6,
                'ciudad' => 'CIUDAD BOLÍVAR',
                'capital' => true,
                'usuario_id' => 1,
            ),
            410 => 
            array (
                'id' => 3,
                'estado_id' => 1,
                'ciudad' => 'SAN FERNANDO DE ATABAPO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            411 => 
            array (
                'id' => 4,
                'estado_id' => 2,
                'ciudad' => 'ANACO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            412 => 
            array (
                'id' => 5,
                'estado_id' => 2,
                'ciudad' => 'ARAGUA DE BARCELONA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            413 => 
            array (
                'id' => 7,
                'estado_id' => 2,
                'ciudad' => 'BOCA DE UCHIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            414 => 
            array (
                'id' => 8,
                'estado_id' => 2,
                'ciudad' => 'CANTAURA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            415 => 
            array (
                'id' => 9,
                'estado_id' => 2,
                'ciudad' => 'CLARINES',
                'capital' => false,
                'usuario_id' => 1,
            ),
            416 => 
            array (
                'id' => 10,
                'estado_id' => 2,
                'ciudad' => 'EL CHAPARRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            417 => 
            array (
                'id' => 11,
                'estado_id' => 2,
                'ciudad' => 'EL PAO ANZOÁTEGUI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            418 => 
            array (
                'id' => 12,
                'estado_id' => 2,
                'ciudad' => 'EL TIGRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            419 => 
            array (
                'id' => 13,
                'estado_id' => 2,
                'ciudad' => 'EL TIGRITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            420 => 
            array (
                'id' => 14,
                'estado_id' => 2,
                'ciudad' => 'GUANAPE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            421 => 
            array (
                'id' => 15,
                'estado_id' => 2,
                'ciudad' => 'GUANTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            422 => 
            array (
                'id' => 16,
                'estado_id' => 2,
                'ciudad' => 'LECHERÍA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            423 => 
            array (
                'id' => 17,
                'estado_id' => 2,
                'ciudad' => 'ONOTO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            424 => 
            array (
                'id' => 18,
                'estado_id' => 2,
                'ciudad' => 'PARIAGUÁN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            425 => 
            array (
                'id' => 19,
                'estado_id' => 2,
                'ciudad' => 'PÍRITU',
                'capital' => false,
                'usuario_id' => 1,
            ),
            426 => 
            array (
                'id' => 20,
                'estado_id' => 2,
                'ciudad' => 'PUERTO LA CRUZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            427 => 
            array (
                'id' => 21,
                'estado_id' => 2,
                'ciudad' => 'PUERTO PÍRITU',
                'capital' => false,
                'usuario_id' => 1,
            ),
            428 => 
            array (
                'id' => 22,
                'estado_id' => 2,
                'ciudad' => 'SABANA DE UCHIRE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            429 => 
            array (
                'id' => 23,
                'estado_id' => 2,
                'ciudad' => 'SAN MATEO ANZOÁTEGUI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            430 => 
            array (
                'id' => 24,
                'estado_id' => 2,
                'ciudad' => 'SAN PABLO ANZOÁTEGUI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            431 => 
            array (
                'id' => 25,
                'estado_id' => 2,
                'ciudad' => 'SAN TOMÉ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            432 => 
            array (
                'id' => 26,
                'estado_id' => 2,
                'ciudad' => 'SANTA ANA DE ANZOÁTEGUI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            433 => 
            array (
                'id' => 27,
                'estado_id' => 2,
                'ciudad' => 'SANTA FE ANZOÁTEGUI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            434 => 
            array (
                'id' => 28,
                'estado_id' => 2,
                'ciudad' => 'SANTA ROSA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            435 => 
            array (
                'id' => 29,
                'estado_id' => 2,
                'ciudad' => 'SOLEDAD',
                'capital' => false,
                'usuario_id' => 1,
            ),
            436 => 
            array (
                'id' => 30,
                'estado_id' => 2,
                'ciudad' => 'URICA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            437 => 
            array (
                'id' => 31,
                'estado_id' => 2,
                'ciudad' => 'VALLE DE GUANAPE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            438 => 
            array (
                'id' => 43,
                'estado_id' => 3,
                'ciudad' => 'ACHAGUAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            439 => 
            array (
                'id' => 44,
                'estado_id' => 3,
                'ciudad' => 'BIRUACA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            440 => 
            array (
                'id' => 45,
                'estado_id' => 3,
                'ciudad' => 'BRUZUAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            441 => 
            array (
                'id' => 46,
                'estado_id' => 3,
                'ciudad' => 'EL AMPARO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            442 => 
            array (
                'id' => 47,
                'estado_id' => 3,
                'ciudad' => 'EL NULA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            443 => 
            array (
                'id' => 48,
                'estado_id' => 3,
                'ciudad' => 'ELORZA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            444 => 
            array (
                'id' => 49,
                'estado_id' => 3,
                'ciudad' => 'GUASDUALITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            445 => 
            array (
                'id' => 50,
                'estado_id' => 3,
                'ciudad' => 'MANTECAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            446 => 
            array (
                'id' => 51,
                'estado_id' => 3,
                'ciudad' => 'PUERTO PÁEZ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            447 => 
            array (
                'id' => 53,
                'estado_id' => 3,
                'ciudad' => 'SAN JUAN DE PAYARA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            448 => 
            array (
                'id' => 54,
                'estado_id' => 4,
                'ciudad' => 'BARBACOAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            449 => 
            array (
                'id' => 55,
                'estado_id' => 4,
                'ciudad' => 'CAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            450 => 
            array (
                'id' => 56,
                'estado_id' => 4,
                'ciudad' => 'CAMATAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            451 => 
            array (
                'id' => 58,
                'estado_id' => 4,
                'ciudad' => 'CHORONÍ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            452 => 
            array (
                'id' => 59,
                'estado_id' => 4,
                'ciudad' => 'COLONIA TOVAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            453 => 
            array (
                'id' => 60,
                'estado_id' => 4,
                'ciudad' => 'EL CONSEJO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            454 => 
            array (
                'id' => 61,
                'estado_id' => 4,
                'ciudad' => 'LA VICTORIA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            455 => 
            array (
                'id' => 62,
                'estado_id' => 4,
                'ciudad' => 'LAS TEJERÍAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            456 => 
            array (
                'id' => 63,
                'estado_id' => 4,
                'ciudad' => 'MAGDALENO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            457 => 
            array (
                'id' => 66,
                'estado_id' => 4,
                'ciudad' => 'PALO NEGRO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            458 => 
            array (
                'id' => 101,
                'estado_id' => 6,
                'ciudad' => 'SAN FÉLIX',
                'capital' => false,
                'usuario_id' => 1,
            ),
            459 => 
            array (
                'id' => 102,
                'estado_id' => 6,
                'ciudad' => 'SANTA ELENA DE UAIRÉN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            460 => 
            array (
                'id' => 103,
                'estado_id' => 6,
                'ciudad' => 'TUMEREMO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            461 => 
            array (
                'id' => 105,
                'estado_id' => 6,
                'ciudad' => 'UPATA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            462 => 
            array (
                'id' => 106,
                'estado_id' => 7,
                'ciudad' => 'BEJUMA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            463 => 
            array (
                'id' => 107,
                'estado_id' => 7,
                'ciudad' => 'BELÉN',
                'capital' => false,
                'usuario_id' => 1,
            ),
            464 => 
            array (
                'id' => 109,
                'estado_id' => 7,
                'ciudad' => 'CANOABO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            465 => 
            array (
                'id' => 259,
                'estado_id' => 13,
                'ciudad' => 'TOVAR',
                'capital' => false,
                'usuario_id' => 1,
            ),
            466 => 
            array (
                'id' => 260,
                'estado_id' => 13,
                'ciudad' => 'TUCANI',
                'capital' => false,
                'usuario_id' => 1,
            ),
            467 => 
            array (
                'id' => 262,
                'estado_id' => 14,
                'ciudad' => 'ARAGUITA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            468 => 
            array (
                'id' => 263,
                'estado_id' => 14,
                'ciudad' => 'CARRIZAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            469 => 
            array (
                'id' => 264,
                'estado_id' => 14,
                'ciudad' => 'CAUCAGUA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            470 => 
            array (
                'id' => 440,
                'estado_id' => 20,
                'ciudad' => 'TRUJILLO',
                'capital' => true,
                'usuario_id' => 1,
            ),
            471 => 
            array (
                'id' => 456,
                'estado_id' => 22,
                'ciudad' => 'SAN FELIPE',
                'capital' => true,
                'usuario_id' => 1,
            ),
            472 => 
            array (
                'id' => 487,
                'estado_id' => 23,
                'ciudad' => 'MARACAIBO',
                'capital' => true,
                'usuario_id' => 1,
            ),
            473 => 
            array (
                'id' => 508,
                'estado_id' => 21,
                'ciudad' => 'LA GUAIRA',
                'capital' => true,
                'usuario_id' => 1,
            ),
            474 => 
            array (
                'id' => 407,
                'estado_id' => 19,
                'ciudad' => 'SAN JOSECITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            475 => 
            array (
                'id' => 408,
                'estado_id' => 19,
                'ciudad' => 'SAN PEDRO DEL RÍO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            476 => 
            array (
                'id' => 409,
                'estado_id' => 19,
                'ciudad' => 'SANTA ANA TÁCHIRA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            477 => 
            array (
                'id' => 410,
                'estado_id' => 19,
                'ciudad' => 'SEBORUCO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            478 => 
            array (
                'id' => 411,
                'estado_id' => 19,
                'ciudad' => 'TÁRIBA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            479 => 
            array (
                'id' => 412,
                'estado_id' => 19,
                'ciudad' => 'UMUQUENA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            480 => 
            array (
                'id' => 413,
                'estado_id' => 19,
                'ciudad' => 'UREÑA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            481 => 
            array (
                'id' => 414,
                'estado_id' => 20,
                'ciudad' => 'BATATAL',
                'capital' => false,
                'usuario_id' => 1,
            ),
            482 => 
            array (
                'id' => 415,
                'estado_id' => 20,
                'ciudad' => 'BETIJOQUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            483 => 
            array (
                'id' => 416,
                'estado_id' => 20,
                'ciudad' => 'BOCONÓ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            484 => 
            array (
                'id' => 417,
                'estado_id' => 20,
                'ciudad' => 'CARACHE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            485 => 
            array (
                'id' => 418,
                'estado_id' => 20,
                'ciudad' => 'CHEJENDE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            486 => 
            array (
                'id' => 419,
                'estado_id' => 20,
                'ciudad' => 'CUICAS',
                'capital' => false,
                'usuario_id' => 1,
            ),
            487 => 
            array (
                'id' => 420,
                'estado_id' => 20,
                'ciudad' => 'EL DIVIDIVE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            488 => 
            array (
                'id' => 421,
                'estado_id' => 20,
                'ciudad' => 'EL JAGUITO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            489 => 
            array (
                'id' => 422,
                'estado_id' => 20,
                'ciudad' => 'ESCUQUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            490 => 
            array (
                'id' => 423,
                'estado_id' => 20,
                'ciudad' => 'ISNOTÚ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            491 => 
            array (
                'id' => 424,
                'estado_id' => 20,
                'ciudad' => 'JAJÓ',
                'capital' => false,
                'usuario_id' => 1,
            ),
            492 => 
            array (
                'id' => 425,
                'estado_id' => 20,
                'ciudad' => 'LA CEIBA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            493 => 
            array (
                'id' => 426,
                'estado_id' => 20,
                'ciudad' => 'LA CONCEPCIÓN DE TRUJLLO',
                'capital' => false,
                'usuario_id' => 1,
            ),
            494 => 
            array (
                'id' => 427,
                'estado_id' => 20,
                'ciudad' => 'LA MESA DE ESNUJAQUE',
                'capital' => false,
                'usuario_id' => 1,
            ),
            495 => 
            array (
                'id' => 428,
                'estado_id' => 20,
                'ciudad' => 'LA PUERTA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            496 => 
            array (
                'id' => 429,
                'estado_id' => 20,
                'ciudad' => 'LA QUEBRADA',
                'capital' => false,
                'usuario_id' => 1,
            ),
            497 => 
            array (
                'id' => 432,
                'estado_id' => 20,
                'ciudad' => 'MONAY',
                'capital' => false,
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}