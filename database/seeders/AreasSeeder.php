<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AreaConocimiento;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncar la tabla y reiniciar el contador de IDs
        AreaConocimiento::truncate();

        // Array de registros a insertar
        $areasConocimiento = [
            ['area_conocimiento'=>'ANTROPOLOGIA','usuario_id' => 1],
            ['area_conocimiento'=>'ASTRONOMIA Y ASTROFISICA','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIA POLITICA','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS AGRARIAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS AGRíCOLAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS DE LA TIERRA Y DEL ESPACIO','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS DE LA VIDA','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS DE LAS ARTES Y LAS LETRAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS JURIDICAS Y DERECHO','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS MEDICAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS MéDICAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS MéDICAS Y DE LA SALUD','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS PURAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS SOCIALES','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS TECNOLOGICAS','usuario_id' => 1],
            ['area_conocimiento'=>'CIENCIAS Y ARTES MILITARES','usuario_id' => 1],
            ['area_conocimiento'=>'DEMOGRAFIA','usuario_id' => 1],
            ['area_conocimiento'=>'ECONOMICAS','usuario_id' => 1],
            ['area_conocimiento'=>'ETICA','usuario_id' => 1],
            ['area_conocimiento'=>'FILOSOFIA','usuario_id' => 1],
            ['area_conocimiento'=>'FISICA','usuario_id' => 1],
            ['area_conocimiento'=>'GEOGRAFIA','usuario_id' => 1],
            ['area_conocimiento'=>'HISTORIA','usuario_id' => 1],
            ['area_conocimiento'=>'LINGUISTICA','usuario_id' => 1],
            ['area_conocimiento'=>'LOGICA','usuario_id' => 1],
            ['area_conocimiento'=>'MATEMATICAS','usuario_id' => 1],
            ['area_conocimiento'=>'MULTIDISCIPLINARIA','usuario_id' => 1],
            ['area_conocimiento'=>'PEDAGOGIA','usuario_id' => 1],
            ['area_conocimiento'=>'PSICOLOGIA','usuario_id' => 1],
            ['area_conocimiento'=>'QUIMICA','usuario_id' => 1],
            ['area_conocimiento'=>'SOCIOLOGÍA','usuario_id' => 1]
        ];

        // Inserción de registros usando el modelo
        foreach ($areasConocimiento as $area) {
            AreaConocimiento::create($area);
        }
   }
}