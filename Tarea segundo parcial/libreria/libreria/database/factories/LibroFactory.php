<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $editorial_id = DB::table('editorials')->inRandomOrder()->value ('id_editorial');
        $faker = Faker::create();
        return [
            'titulo' => $this->faker->sentence(3),
            'editorial_id' => $editorial_id,
            'autor'=> $this->faker->name(),
            'edicion' => $this->faker->numberBetween(1, 10),
            'pais' => $this->faker->country(),
            'precio' => $this->faker->numberBetween(10, 200)

        ];
    }
}
