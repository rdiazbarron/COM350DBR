<?php

namespace Database\Seeders;
use App\Models\Pelicula;
use App\Models\Sala;
use App\Models\Funcion;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(PeliculaSeeder::class);
        $this->call(SalaSeeder::class);
        $this->call(FuncionSeeder::class);
    }
}
