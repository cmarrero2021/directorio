<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('indices')->delete();
        
        \DB::table('indices')->insert(array (
            0 => 
            array (
                'id' => 2,
                'indice' => 'A B C POL SCI',
                'usuario_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'indice' => 'ABSTRACTS IN ANTROPOLOGY',
                'usuario_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'indice' => 'ABSTRACTS OF MYCOLOGY',
                'usuario_id' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'indice' => 'ABSTRACTSON HYGIENEANDCOMMUNICABLEDISEASES',
                'usuario_id' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'indice' => 'ABSTRACTSON TROPICAL AGRICULTURE',
                'usuario_id' => 1,
            ),
            5 => 
            array (
                'id' => 7,
                'indice' => 'ACADEMIC SEARCH COMPLETE',
                'usuario_id' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'indice' => 'AGRICOLA',
                'usuario_id' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'indice' => 'AGRICULTURALAND ENVIRONMETALBIOTECHONOLOGYABSTRACTS',
                'usuario_id' => 1,
            ),
            8 => 
            array (
                'id' => 10,
                'indice' => 'AGRINDEX',
                'usuario_id' => 1,
            ),
            9 => 
            array (
                'id' => 11,
                'indice' => 'AGRIS',
                'usuario_id' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'indice' => 'AGROBASE',
                'usuario_id' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'indice' => 'AGROFORESTRY ABSTRACTS',
                'usuario_id' => 1,
            ),
            12 => 
            array (
                'id' => 14,
                'indice' => 'AIDS ABSTRACTS',
                'usuario_id' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'indice' => 'AMERICA HISTORY AND LIFE',
                'usuario_id' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'indice' => 'ANIMAL BEHAVIORABSTRACTS',
                'usuario_id' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'indice' => 'ANIMALBREEDINGABSTRACTS',
                'usuario_id' => 1,
            ),
            16 => 
            array (
                'id' => 18,
                'indice' => 'ANTHOROPOLOGICALLITERATURE',
                'usuario_id' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'indice' => 'API AMERICANPETROLEUMCOMPANY',
                'usuario_id' => 1,
            ),
            18 => 
            array (
                'id' => 20,
                'indice' => 'APPLIEDMECHANICSREVIEWS',
                'usuario_id' => 1,
            ),
            19 => 
            array (
                'id' => 21,
            'indice' => 'AQUATICSCIENCESANDFISHERIESABSTRACTS(ASFA)',
                'usuario_id' => 1,
            ),
            20 => 
            array (
                'id' => 22,
                'indice' => 'ARCHITECTURALPUBLICATIONSINDEX',
                'usuario_id' => 1,
            ),
            21 => 
            array (
                'id' => 23,
                'indice' => 'ART & HUMANITIESCITATION INDEX',
                'usuario_id' => 1,
            ),
            22 => 
            array (
                'id' => 24,
                'indice' => 'BASE',
                'usuario_id' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'indice' => 'BIBLAT',
                'usuario_id' => 1,
            ),
            24 => 
            array (
                'id' => 26,
                'indice' => 'BIBLIOTECAVIRTUALDE CLASO',
                'usuario_id' => 1,
            ),
            25 => 
            array (
                'id' => 27,
                'indice' => 'BIOLOGICALASBTRACTS',
                'usuario_id' => 1,
            ),
            26 => 
            array (
                'id' => 28,
                'indice' => 'BIOTECHNOLOGY ABSTRACTS',
                'usuario_id' => 1,
            ),
            27 => 
            array (
                'id' => 29,
                'indice' => 'BUSINESS SOURCE COMPLETE',
                'usuario_id' => 1,
            ),
            28 => 
            array (
                'id' => 30,
                'indice' => 'CAB ABSTRACTS',
                'usuario_id' => 1,
            ),
            29 => 
            array (
                'id' => 31,
                'indice' => 'CHEMICAL ABSTRACTS',
                'usuario_id' => 1,
            ),
            30 => 
            array (
                'id' => 32,
                'indice' => 'CIRCCLASIFICACION INTEGRADA DE REVISTASCIENTIFICA',
                'usuario_id' => 1,
            ),
            31 => 
            array (
                'id' => 33,
                'indice' => 'CLASE',
                'usuario_id' => 1,
            ),
            32 => 
            array (
                'id' => 34,
                'indice' => 'COMPENDEX',
                'usuario_id' => 1,
            ),
            33 => 
            array (
                'id' => 35,
                'indice' => 'COMPLUDOC',
                'usuario_id' => 1,
            ),
            34 => 
            array (
                'id' => 36,
                'indice' => 'CURRENT CONTENTS',
                'usuario_id' => 1,
            ),
            35 => 
            array (
                'id' => 37,
                'indice' => 'DAIRYSCIENCEABSTRACTS',
                'usuario_id' => 1,
            ),
            36 => 
            array (
                'id' => 38,
                'indice' => 'DAREDATABANK',
                'usuario_id' => 1,
            ),
            37 => 
            array (
                'id' => 39,
                'indice' => 'DIALNET',
                'usuario_id' => 1,
            ),
            38 => 
            array (
                'id' => 40,
            'indice' => 'DIRECTORY OF OPEN ACCESS JOUNARLS(DOAJ)',
                'usuario_id' => 1,
            ),
            39 => 
            array (
                'id' => 41,
                'indice' => 'EBSCO EDUCATION SOURCE',
                'usuario_id' => 1,
            ),
            40 => 
            array (
                'id' => 42,
                'indice' => 'ECOLOGICAL ABSTRACTS',
                'usuario_id' => 1,
            ),
            41 => 
            array (
                'id' => 43,
                'indice' => 'ECONLIT',
                'usuario_id' => 1,
            ),
            42 => 
            array (
                'id' => 44,
                'indice' => 'ELECTRONIC JOURNALS LIBRARY',
                'usuario_id' => 1,
            ),
            43 => 
            array (
                'id' => 45,
                'indice' => 'EMBASE EXCERPTA MEDICA',
                'usuario_id' => 1,
            ),
            44 => 
            array (
                'id' => 46,
                'indice' => 'EMERGINCSOURCESCITATIONINDEXESCI',
                'usuario_id' => 1,
            ),
            45 => 
            array (
                'id' => 47,
                'indice' => 'ENGINEERINGINDEX',
                'usuario_id' => 1,
            ),
            46 => 
            array (
                'id' => 48,
                'indice' => 'ENTOMOLOGY ABSTRACTS',
                'usuario_id' => 1,
            ),
            47 => 
            array (
                'id' => 49,
                'indice' => 'E-PSYCHE',
                'usuario_id' => 1,
            ),
            48 => 
            array (
                'id' => 50,
                'indice' => 'ERIC',
                'usuario_id' => 1,
            ),
            49 => 
            array (
                'id' => 51,
                'indice' => 'ERIH PLUS',
                'usuario_id' => 1,
            ),
            50 => 
            array (
                'id' => 52,
                'indice' => 'EZB ELECTRONIC JOUNALS LIBRARY',
                'usuario_id' => 1,
            ),
            51 => 
            array (
                'id' => 53,
                'indice' => 'FIELDCROPABSTRACTS',
                'usuario_id' => 1,
            ),
            52 => 
            array (
                'id' => 54,
                'indice' => 'FLUID ABSTRACTS',
                'usuario_id' => 1,
            ),
            53 => 
            array (
                'id' => 55,
                'indice' => 'FLUIDEX',
                'usuario_id' => 1,
            ),
            54 => 
            array (
                'id' => 56,
                'indice' => 'FOOD SCIENCEANDTECHNOLOGY ASTRACTS',
                'usuario_id' => 1,
            ),
            55 => 
            array (
                'id' => 57,
                'indice' => 'FORESTRY ABSTRACTS',
                'usuario_id' => 1,
            ),
            56 => 
            array (
                'id' => 58,
                'indice' => 'FREE MEDICAL JOURNALS',
                'usuario_id' => 1,
            ),
            57 => 
            array (
                'id' => 59,
                'indice' => 'FUENTE ACADEMICA',
                'usuario_id' => 1,
            ),
            58 => 
            array (
                'id' => 60,
                'indice' => 'GEOARCHIVE',
                'usuario_id' => 1,
            ),
            59 => 
            array (
                'id' => 61,
                'indice' => 'GEOBASE',
                'usuario_id' => 1,
            ),
            60 => 
            array (
                'id' => 62,
                'indice' => 'GEODADOS',
                'usuario_id' => 1,
            ),
            61 => 
            array (
                'id' => 63,
                'indice' => 'GEOGRAPHICAL ABSTRACTS: HUMAN GEOGRAPHY',
                'usuario_id' => 1,
            ),
            62 => 
            array (
                'id' => 64,
                'indice' => 'GEOLOGICAL ABSTRACTS',
                'usuario_id' => 1,
            ),
            63 => 
            array (
                'id' => 65,
                'indice' => 'GEOREF',
                'usuario_id' => 1,
            ),
            64 => 
            array (
                'id' => 66,
                'indice' => 'GEOSCIENCE DOCUMENTATION',
                'usuario_id' => 1,
            ),
            65 => 
            array (
                'id' => 67,
                'indice' => 'GRASSLANDS AND FORAGE ABSTRACTS',
                'usuario_id' => 1,
            ),
            66 => 
            array (
                'id' => 68,
                'indice' => 'HAPIHISPANIC AMERICAN PERIODICALS INDEX',
                'usuario_id' => 1,
            ),
            67 => 
            array (
                'id' => 69,
                'indice' => 'HLA',
                'usuario_id' => 1,
            ),
            68 => 
            array (
                'id' => 70,
                'indice' => 'HORTICULTURALABSTRACTS',
                'usuario_id' => 1,
            ),
            69 => 
            array (
                'id' => 71,
                'indice' => 'IDA (INTERNATIONAL DEVELOPMENT ABSTRACTS',
                    'usuario_id' => 1,
                ),
                70 => 
                array (
                    'id' => 72,
                    'indice' => 'IHEAL',
                    'usuario_id' => 1,
                ),
                71 => 
                array (
                    'id' => 73,
                    'indice' => 'IMBIOMED',
                    'usuario_id' => 1,
                ),
                72 => 
                array (
                    'id' => 74,
                    'indice' => 'IMLA INDEX MEDICUS LATINO-AMERICANO',
                    'usuario_id' => 1,
                ),
                73 => 
                array (
                    'id' => 75,
                    'indice' => 'INDEX MEDICUS',
                    'usuario_id' => 1,
                ),
                74 => 
                array (
                    'id' => 76,
                    'indice' => 'INDEXCOPERNICUSINTERNATIONAL',
                    'usuario_id' => 1,
                ),
                75 => 
                array (
                    'id' => 77,
                    'indice' => 'INDEXVETERINARIUS',
                    'usuario_id' => 1,
                ),
                76 => 
                array (
                    'id' => 78,
                    'indice' => 'INFOBILA',
                    'usuario_id' => 1,
                ),
                77 => 
                array (
                    'id' => 79,
                    'indice' => 'INFORME ACADÉMICO',
                    'usuario_id' => 1,
                ),
                78 => 
                array (
                    'id' => 80,
                    'indice' => 'INIS ATOMINDEX',
                    'usuario_id' => 1,
                ),
                79 => 
                array (
                    'id' => 81,
                    'indice' => 'INSPEC THE INSTITUTION OF ELECTRICAL ENGINEERS',
                    'usuario_id' => 1,
                ),
                80 => 
                array (
                    'id' => 82,
                    'indice' => 'INTERNATIONALBIBLIOGRAPHYOF THESOCIAL SCIENCES',
                    'usuario_id' => 1,
                ),
                81 => 
                array (
                    'id' => 83,
                    'indice' => 'IRESIE',
                    'usuario_id' => 1,
                ),
                82 => 
                array (
                    'id' => 84,
                    'indice' => 'LATAM STUDIES',
                    'usuario_id' => 1,
                ),
                83 => 
                array (
                    'id' => 85,
                    'indice' => 'LATINDEX CATALOGO',
                    'usuario_id' => 1,
                ),
                84 => 
                array (
                    'id' => 86,
                    'indice' => 'LATINDEX- DIRECTORIO',
                    'usuario_id' => 1,
                ),
                85 => 
                array (
                    'id' => 87,
                    'indice' => 'LIBRARY LITERATURE FULL TEXT',
                    'usuario_id' => 1,
                ),
                86 => 
                array (
                    'id' => 88,
                    'indice' => 'LILACS',
                    'usuario_id' => 1,
                ),
                87 => 
                array (
                    'id' => 89,
                    'indice' => 'LINGUISTICS ABSTRACTS',
                    'usuario_id' => 1,
                ),
                88 => 
                array (
                    'id' => 90,
                    'indice' => 'LINGUISTICS AND LANGUAGE BEHAVIOR ABSTRACTS',
                    'usuario_id' => 1,
                ),
                89 => 
                array (
                    'id' => 91,
                    'indice' => 'MATERIALS RESEARCH DATABASE',
                    'usuario_id' => 1,
                ),
                90 => 
                array (
                    'id' => 92,
                    'indice' => 'MATH SCI',
                    'usuario_id' => 1,
                ),
                91 => 
                array (
                    'id' => 93,
                    'indice' => 'MATHEMATICALREVIEWS',
                    'usuario_id' => 1,
                ),
                92 => 
                array (
                    'id' => 94,
                    'indice' => 'MEDIGRAPHIC',
                    'usuario_id' => 1,
                ),
                93 => 
                array (
                    'id' => 95,
                    'indice' => 'MEDLINE',
                    'usuario_id' => 1,
                ),
                94 => 
                array (
                    'id' => 96,
                    'indice' => 'METADEX',
                    'usuario_id' => 1,
                ),
                95 => 
                array (
                    'id' => 97,
                    'indice' => 'METALS ABSTRACTS INDEX',
                    'usuario_id' => 1,
                ),
                96 => 
                array (
                    'id' => 98,
                    'indice' => 'MIAR',
                    'usuario_id' => 1,
                ),
                97 => 
                array (
                    'id' => 99,
                    'indice' => 'MINERALOGICALABSTRACTS',
                    'usuario_id' => 1,
                ),
                98 => 
                array (
                    'id' => 100,
                    'indice' => 'NUTRITION ABSTRACTS AND REVIEWSSERIE AHUMAN AND EXPERIMENTAL',
                    'usuario_id' => 1,
                ),
                99 => 
                array (
                    'id' => 101,
                    'indice' => 'OEI-CREDI',
                    'usuario_id' => 1,
                ),
                100 => 
                array (
                    'id' => 102,
                    'indice' => 'P A I S INTERNATIONALPUBLIC AFFAIRS INFORMATION SERVICE',
                    'usuario_id' => 1,
                ),
                101 => 
                array (
                    'id' => 103,
                    'indice' => 'PERIODICA',
                    'usuario_id' => 1,
                ),
                102 => 
                array (
                    'id' => 104,
                    'indice' => 'PETROLEUM ABSTRACTS',
                    'usuario_id' => 1,
                ),
                103 => 
                array (
                    'id' => 105,
                    'indice' => 'PHILOSOPHERS INDEX',
                    'usuario_id' => 1,
                ),
                104 => 
                array (
                    'id' => 106,
                    'indice' => 'PLANT BREEDING ABSTRATS',
                    'usuario_id' => 1,
                ),
                105 => 
                array (
                    'id' => 107,
                    'indice' => 'POLITICAL SCIENCE COMPLETE',
                    'usuario_id' => 1,
                ),
                106 => 
                array (
                    'id' => 108,
                    'indice' => 'PROQUETSNATURAL SCIENCE JOURNALD',
                    'usuario_id' => 1,
                ),
                107 => 
                array (
                    'id' => 109,
                    'indice' => 'PUBLINDEX',
                    'usuario_id' => 1,
                ),
                108 => 
                array (
                    'id' => 110,
                    'indice' => 'RED ALYC',
                    'usuario_id' => 1,
                ),
                109 => 
                array (
                    'id' => 111,
                    'indice' => 'REDIB',
                    'usuario_id' => 1,
                ),
                110 => 
                array (
                    'id' => 112,
                    'indice' => 'REDINSE',
                    'usuario_id' => 1,
                ),
                111 => 
                array (
                    'id' => 113,
                    'indice' => 'REFERATIVNYI ZHURNAL',
                    'usuario_id' => 1,
                ),
                112 => 
                array (
                    'id' => 114,
                    'indice' => 'RESEARCHPAPERSINECONOMICSREPEC',
                    'usuario_id' => 1,
                ),
                113 => 
                array (
                    'id' => 115,
                    'indice' => 'REVENCY',
                    'usuario_id' => 1,
                ),
                114 => 
                array (
                    'id' => 116,
                    'indice' => 'REVIEW OF AGRICULTURAL ENTOMOLOGY',
                    'usuario_id' => 1,
                ),
                115 => 
                array (
                    'id' => 117,
                    'indice' => 'REVISTASSABER ULA',
                    'usuario_id' => 1,
                ),
                116 => 
                array (
                    'id' => 118,
                    'indice' => 'RICE ABSTRACTS',
                    'usuario_id' => 1,
                ),
                117 => 
                array (
                    'id' => 119,
                    'indice' => 'ROAD',
                    'usuario_id' => 1,
                ),
                118 => 
                array (
                    'id' => 120,
                    'indice' => 'SCIELO',
                    'usuario_id' => 1,
                ),
                119 => 
                array (
                    'id' => 121,
                    'indice' => 'SCIENCE CITATIÓN INDEXEXPANDED',
                    'usuario_id' => 1,
                ),
                120 => 
                array (
                    'id' => 122,
                    'indice' => 'SCOPUS',
                    'usuario_id' => 1,
                ),
                121 => 
                array (
                    'id' => 123,
                    'indice' => 'SEED ABSTRACTS',
                    'usuario_id' => 1,
                ),
                122 => 
                array (
                    'id' => 124,
                    'indice' => 'SHERPA/ROMEO',
                    'usuario_id' => 1,
                ),
                123 => 
                array (
                    'id' => 125,
                    'indice' => 'SOCIAL SCIENCESCITATION INDEX',
                    'usuario_id' => 1,
                ),
                124 => 
                array (
                    'id' => 126,
                    'indice' => 'SOCIAL SCISEARCH',
                    'usuario_id' => 1,
                ),
                125 => 
                array (
                    'id' => 127,
                    'indice' => 'SOCIOLOGICALABSTRACTS',
                    'usuario_id' => 1,
                ),
                126 => 
                array (
                    'id' => 128,
                    'indice' => 'SPELEOLOGICALABSTRACTS',
                    'usuario_id' => 1,
                ),
                127 => 
                array (
                    'id' => 129,
                    'indice' => 'TROPICAL ABSTRACTS',
                    'usuario_id' => 1,
                ),
                128 => 
                array (
                    'id' => 130,
                    'indice' => 'TROPICAL DISEASES BULLETIN',
                    'usuario_id' => 1,
                ),
                129 => 
                array (
                    'id' => 131,
                    'indice' => 'ULRICHS',
                    'usuario_id' => 1,
                ),
                130 => 
                array (
                    'id' => 132,
                    'indice' => 'VETERINARY BULLETIN',
                    'usuario_id' => 1,
                ),
                131 => 
                array (
                    'id' => 133,
                    'indice' => 'VETERINARY SCIENCE',
                    'usuario_id' => 1,
                ),
                132 => 
                array (
                    'id' => 134,
                    'indice' => 'WEED ABSTRACTS',
                    'usuario_id' => 1,
                ),
                133 => 
                array (
                    'id' => 135,
                    'indice' => 'ZOOLOGICALRECORD',
                    'usuario_id' => 1,
                ),
                134 => 
                array (
                    'id' => 1,
                    'indice' => ' NO PERTENECE A NINGÚN INDICE',
                    'usuario_id' => 1,
                ),
                135 => 
                array (
                    'id' => 136,
                'indice' => 'OPEN JOURNAL SYSTEM (OJS)',
                    'usuario_id' => 1,
                ),
                136 => 
                array (
                    'id' => 137,
                    'indice' => 'LATINDEX',
                    'usuario_id' => 1,
                ),
                137 => 
                array (
                    'id' => 138,
                    'indice' => 'REBIUN',
                    'usuario_id' => 1,
                ),
                138 => 
                array (
                    'id' => 139,
                    'indice' => 'DOAJ',
                    'usuario_id' => 1,
                ),
                139 => 
                array (
                    'id' => 140,
                    'indice' => 'REVENCYT',
                    'usuario_id' => 1,
                ),
            ));
        
        
    }
}