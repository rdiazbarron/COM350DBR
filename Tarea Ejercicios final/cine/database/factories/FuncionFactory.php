<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcion>
 */
class FuncionFactory extends Factory
{
    /**
     * Define the model's default state.
     *  'id_funcion',
    
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $id_pelicula = DB::table('peliculas')->inRandomOrder()->value ('id_pelicula');
        $id_sala = DB::table('salas')->inRandomOrder()->value ('id_sala');
        return [
            
            'id_pelicula' => $id_pelicula,
            'id_sala' => $id_sala,
            'fecha' => $this->faker->dateTimeThisMonth(),
            'hora' => $this->faker->time(),
            'precio' => $this->faker->numberBetween(20,45),
            'estado' => $this->faker->numberBetween(0,1),
        ];
    }
}
