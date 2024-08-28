<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(EditorialesSeeder::class);
        $this->call(FormatosSeeder::class);
        $this->call(IdiomasSeeder::class);
        $this->call(IndicesSeeder::class);
        $this->call(PeriodicidadSeeder::class);
        $this->call(AreasConocimientoTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(EditorialesTableSeeder::class);
        $this->call(FormatosTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(IndicesTableSeeder::class);
        $this->call(PeriodicidadTableSeeder::class);
        $this->call(RevistasTableSeeder::class);
    }
}
