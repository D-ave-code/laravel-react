<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'  => $this->faker->name,
            'precio' => $this->faker->numberBetween(10, 500),
            'descripcion' => $this->faker->sentence(),
            'imagenP' => $this->faker->imageUrl(64, 64),
            'id_tipo_productos' => $this->faker->randomElement([1, 2, 3, 4, 5 ,6]),
            'id_marcas' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'id_tipo_personas' => $this->faker->randomElement([1, 2, 3, 4]),
        ];
    }
}
