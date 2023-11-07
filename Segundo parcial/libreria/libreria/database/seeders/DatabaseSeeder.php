<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial; 
use App\Models\Libro;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call([
            EditorialSeeder::class,
            LibroSeeder::class
        ]);
    }
}
