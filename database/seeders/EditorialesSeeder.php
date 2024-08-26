<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Editorial::truncate();
        $editoriales = [
            ['editorial' => 'UNIVERSIDAD DE LOS ANDES','url' => 'http://www.ula.ve/','usuario_id' => 1],
            ['editorial' => 'UNIVERSIDAD PEDAGóGICA EXPERIMENTAL LIBERTADOR','url' => '','usuario_id' => 1],
            ['editorial' => 'CONSEJO COMUNAL DE LOS PALOS GRANDES','url' => '','usuario_id' => 1],
            ['editorial' => 'UNIVERSIDAD CENTRAL DE VENEZUELA','url' => '','usuario_id' => 1],
            ['editorial' => 'INSTITUTO VENEZOLANO DE INVESTIGACIONES CIENTÍFICAS','url' => '','usuario_id' => 1],
            ['editorial' => 'UNIVERSIDAD MILITAR DE VENEZUELA','url' => 'http://www.umbv.edu.ve/','usuario_id' => 1],
            ['editorial' => 'FUNDACIóN KOINONíA','url' =>  '','usuario_id' => 1],
            ['editorial' => 'UNIVERSIDAD CENTROCCIDENTAL LISANDRO ALVARADO','url' =>  '','usuario_id' => 1],
            ['editorial' => 'EDITORIAL HORMIGUERO','url' => 'www.hormiguero.com.ve/portafolio/revistas/','usuario_id' => 1],];
        foreach ($editoriales as $editorial) {
            Editorial::create($editorial);
        }
    }
}
