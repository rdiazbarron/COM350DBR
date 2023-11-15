<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro; 

class LibroSeeder extends Seeder
{
    
    public function run(): void
    {
        Libro::factory(1000)->create();
    }
}
