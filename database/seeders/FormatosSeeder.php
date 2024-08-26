<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formato;

class FormatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formato::truncate();
        $formatos = [
            ['formato' => 'IMPRESO','usuario_id' => 1],
            ['formato' => 'DIGITAL','usuario_id' => 1],
            ['formato' => 'MIXTO','usuario_id' => 1],
        ];
        foreach($formatos as $formato) {
            Formato::create($formato);
        }
    }
}
