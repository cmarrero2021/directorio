<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IdiomasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('idiomas')->delete();
        
        \DB::table('idiomas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idioma' => 'ESPAÑOL',
                'iso' => 'ES',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'idioma' => 'INGLÉS',
                'iso' => 'EN',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'idioma' => 'AZERÍ',
                'iso' => 'AZ',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'idioma' => 'AFRIKAANS',
                'iso' => 'AF',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'idioma' => 'ALBANÉS',
                'iso' => 'SQ',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'idioma' => 'ALEMÁN',
                'iso' => 'DE',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'idioma' => 'ALSACIANO',
                'iso' => 'ALS',
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'idioma' => 'AMÁRICO',
                'iso' => 'AM',
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'idioma' => 'ANGLOSAJÓN',
                'iso' => 'ANG',
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'idioma' => 'ÁRABE',
                'iso' => 'AR',
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'idioma' => 'ARAGONÉS',
                'iso' => 'AN',
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'idioma' => 'ARMENIO',
                'iso' => 'HY',
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'idioma' => 'ASTURIANO',
                'iso' => 'AST',
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'idioma' => 'AYMARA',
                'iso' => 'AY',
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'idioma' => 'BAJO SAJÓN',
                'iso' => 'NDS',
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'idioma' => 'BENGALÍ',
                'iso' => 'BN',
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'idioma' => 'BIELORRUSO',
                'iso' => 'BE',
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'idioma' => 'BIRMANO',
                'iso' => 'MY',
                'usuario_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'idioma' => 'BOSNIO',
                'iso' => 'BS',
                'usuario_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'idioma' => 'BRETÓN',
                'iso' => 'BR',
                'usuario_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'idioma' => 'BÚLGARO',
                'iso' => 'BG',
                'usuario_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'idioma' => 'CANARÉS',
                'iso' => 'KN',
                'usuario_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'idioma' => 'CATALÁN',
                'iso' => 'CA',
                'usuario_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'idioma' => 'CHAMORRO',
                'iso' => 'CH',
                'usuario_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'idioma' => 'CHECO',
                'iso' => 'CS',
                'usuario_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'idioma' => 'CHEROQUI',
                'iso' => 'CHR',
                'usuario_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'idioma' => 'CHINO MANDARÍN',
                'iso' => 'ZH',
                'usuario_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'idioma' => 'COREANO',
                'iso' => 'KO',
                'usuario_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'idioma' => 'CORSO',
                'iso' => 'CO',
                'usuario_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'idioma' => 'CROATA',
                'iso' => 'HR',
                'usuario_id' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'idioma' => 'CURDO',
                'iso' => 'KU',
                'usuario_id' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'idioma' => 'DANÉS',
                'iso' => 'DA',
                'usuario_id' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'idioma' => 'ESLOVACO',
                'iso' => 'SK',
                'usuario_id' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'idioma' => 'ESLOVENO',
                'iso' => 'SL',
                'usuario_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'idioma' => 'ESPERANTO',
                'iso' => 'EO',
                'usuario_id' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'idioma' => 'ESTONIO',
                'iso' => 'ET',
                'usuario_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'idioma' => 'EUSKERA',
                'iso' => 'EU',
                'usuario_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'idioma' => 'FEROÉS',
                'iso' => 'FO',
                'usuario_id' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'idioma' => 'FIYIANO',
                'iso' => 'FJ',
                'usuario_id' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'idioma' => 'FINLANDÉS',
                'iso' => 'FI',
                'usuario_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'idioma' => 'FRANCÉS',
                'iso' => 'FR',
                'usuario_id' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'idioma' => 'FRISÓN',
                'iso' => 'FY',
                'usuario_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'idioma' => 'GALÉS',
                'iso' => 'CY',
                'usuario_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'idioma' => 'GALLEGO',
                'iso' => 'GL',
                'usuario_id' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'idioma' => 'GEORGIANO',
                'iso' => 'KA',
                'usuario_id' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'idioma' => 'GRIEGO MODERNO',
                'iso' => 'EL',
                'usuario_id' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'idioma' => 'GUARANÍ',
                'iso' => 'GN',
                'usuario_id' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'idioma' => 'GUJARATÍ',
                'iso' => 'GU',
                'usuario_id' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'idioma' => 'HEBREO ISRAELÍ',
                'iso' => 'HE',
                'usuario_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'idioma' => 'HINDI',
                'iso' => 'HI',
                'usuario_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'idioma' => 'HOLANDÉS',
                'iso' => 'NL',
                'usuario_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'idioma' => 'HÚNGARO',
                'iso' => 'HU',
                'usuario_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'idioma' => 'IDO',
                'iso' => 'IO',
                'usuario_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'idioma' => 'IGBO',
                'iso' => 'IG',
                'usuario_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'idioma' => 'INDONESIO',
                'iso' => 'ID',
                'usuario_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'idioma' => 'INGLÉS SIMPLIFICADO',
                'iso' => 'PLE',
                'usuario_id' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'idioma' => 'INTERLINGUA',
                'iso' => 'IA',
                'usuario_id' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'idioma' => 'IRLANDÉS',
                'iso' => 'GA',
                'usuario_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'idioma' => 'ISLANDÉS',
                'iso' => 'IS',
                'usuario_id' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'idioma' => 'ITALIANO',
                'iso' => 'IT',
                'usuario_id' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'idioma' => 'JAPONÉS',
                'iso' => 'JA',
                'usuario_id' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'idioma' => 'JAVANÉS',
                'iso' => 'JV',
                'usuario_id' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'idioma' => 'KAZAKO',
                'iso' => 'KK',
                'usuario_id' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'idioma' => 'LAOSIANO',
                'iso' => 'LO',
                'usuario_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'idioma' => 'LATÍN',
                'iso' => 'LA',
                'usuario_id' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'idioma' => 'LETÓN',
                'iso' => 'LV',
                'usuario_id' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'idioma' => 'LINGALA',
                'iso' => 'LN',
                'usuario_id' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'idioma' => 'LITUANO',
                'iso' => 'LT',
                'usuario_id' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'idioma' => 'LUXEMBURGUÉS',
                'iso' => 'LB',
                'usuario_id' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'idioma' => 'MACEDONIO',
                'iso' => 'MK',
                'usuario_id' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'idioma' => 'MALABAR',
                'iso' => 'ML',
                'usuario_id' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'idioma' => 'MALAYO',
                'iso' => 'MS',
                'usuario_id' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'idioma' => 'MALGACHE',
                'iso' => 'MG',
                'usuario_id' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'idioma' => 'MALTÉS',
                'iso' => 'MT',
                'usuario_id' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'idioma' => 'MANÉS',
                'iso' => 'GV',
                'usuario_id' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'idioma' => 'MAORÍ',
                'iso' => 'MI',
                'usuario_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'idioma' => 'MARATI',
                'iso' => 'MR',
                'usuario_id' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'idioma' => 'MOLDAVO',
                'iso' => 'MO',
                'usuario_id' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'idioma' => 'MONGOL',
                'iso' => 'MN',
                'usuario_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'idioma' => 'NÁHUATL',
                'iso' => 'NAH',
                'usuario_id' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'idioma' => 'NAURUANO',
                'iso' => 'NA',
                'usuario_id' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'idioma' => 'NORUEGO',
                'iso' => 'NO',
                'usuario_id' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'idioma' => 'OCCITANO',
                'iso' => 'OC',
                'usuario_id' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'idioma' => 'PAPIAMENTO',
                'iso' => 'PAP',
                'usuario_id' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'idioma' => 'PERSA MODERNO',
                'iso' => 'FA',
                'usuario_id' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'idioma' => 'POLACO',
                'iso' => 'PL',
                'usuario_id' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'idioma' => 'PORTUGUÉS',
                'iso' => 'PT',
                'usuario_id' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'idioma' => 'PUNJABÍ',
                'iso' => 'PA',
                'usuario_id' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'idioma' => 'QUECHUA',
                'iso' => 'QU',
                'usuario_id' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'idioma' => 'QUIRGUIZ',
                'iso' => 'KY',
                'usuario_id' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'idioma' => 'ROMANCHE',
                'iso' => 'RM',
                'usuario_id' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'idioma' => 'RUMANO',
                'iso' => 'RO',
                'usuario_id' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'idioma' => 'RUSO',
                'iso' => 'RU',
                'usuario_id' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'idioma' => 'SARDO',
                'iso' => 'SC',
                'usuario_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'idioma' => 'SERBIO',
                'iso' => 'SR',
                'usuario_id' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'idioma' => 'SESOTHO',
                'iso' => 'ST',
                'usuario_id' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'idioma' => 'SICILIANO',
                'iso' => 'SCN',
                'usuario_id' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'idioma' => 'SOMALÍ',
                'iso' => 'SO',
                'usuario_id' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'idioma' => 'SUECO',
                'iso' => 'SV',
                'usuario_id' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'idioma' => 'SWAHILI',
                'iso' => 'SW',
                'usuario_id' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'idioma' => 'TAGALO',
                'iso' => 'TL',
                'usuario_id' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'idioma' => 'TAILANDÉS',
                'iso' => 'TH',
                'usuario_id' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'idioma' => 'TAMIL',
                'iso' => 'TA',
                'usuario_id' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'idioma' => 'TÁRTARO',
                'iso' => 'TT',
                'usuario_id' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'idioma' => 'TÁRTARO DE CRIMEA',
                'iso' => 'CRH',
                'usuario_id' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'idioma' => 'TEGULÚ',
                'iso' => 'TE',
                'usuario_id' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'idioma' => 'TIBETANO',
                'iso' => 'BO',
                'usuario_id' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'idioma' => 'TURCO',
                'iso' => 'TR',
                'usuario_id' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'idioma' => 'TURCOMANO',
                'iso' => 'TK',
                'usuario_id' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'idioma' => 'UCRANIANO',
                'iso' => 'UK',
                'usuario_id' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'idioma' => 'URDU',
                'iso' => 'UR',
                'usuario_id' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'idioma' => 'UZBEKO',
                'iso' => 'UZ',
                'usuario_id' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'idioma' => 'VALÓN',
                'iso' => 'WA',
                'usuario_id' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'idioma' => 'VIETNAMITA',
                'iso' => 'VI',
                'usuario_id' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'idioma' => 'VOLAPUK',
                'iso' => 'VO',
                'usuario_id' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'idioma' => 'XHOSA',
                'iso' => 'XH',
                'usuario_id' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'idioma' => 'YIDISH',
                'iso' => 'YI',
                'usuario_id' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'idioma' => 'YORUBA',
                'iso' => 'YO',
                'usuario_id' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'idioma' => 'ZULÚ',
                'iso' => 'ZU',
                'usuario_id' => 1,
            ),
        ));
        
        
    }
}