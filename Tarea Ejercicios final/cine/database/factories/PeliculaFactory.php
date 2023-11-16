<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
      $table->id('id_pelicula');
            $table->string('título',100);
            $table->string('artistas_principales',100);
            $table->integer('año');
            $table->string('productora',100);
            $table->string('genero',100);

            $table->timestamps();
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $artistas = fake()->lastName().",".fake()->lastName().",".fake()->lastName();
        return [
            'titulo' => $this->faker->name(),
            'artistas_principales' => $artistas,
            'año' => $this->faker->numberBetween(2000,2021),
            'productora' => $this->faker->name(),
            'genero' => $this->faker->name(),
        ];
    }
}
