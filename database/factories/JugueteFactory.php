<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juguete>
 */
class JugueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre_juguete' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraphs(10, true),
            'path_imagen' => $this->faker->randomElement(['boxeo.jpg','billetes.jpg','grafica.jpg','monedas.jpg', 'bambas.jpg','atleta.jpg']),
            'fecha_publicacion' => date('y/m/d'),
        ];
    }
}
