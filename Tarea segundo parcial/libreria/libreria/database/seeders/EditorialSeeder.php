<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial; 

class EditorialSeeder extends Seeder
{
    
    public function run(): void
    {
        Editorial::factory(10)->create();
    }
}
