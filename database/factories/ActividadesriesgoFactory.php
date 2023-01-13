<?php

namespace Database\Factories;

use App\Models\Seguimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividadesriesgo>
 */
class ActividadesriesgoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $seguimiento = Seguimiento::all()->random();
        return [
            'seguimiento_id' => $seguimiento->id,
            'Nombre' => $this->faker->text(230),
            'Estado' => $this->faker->randomElement(['checked','']),
        ];
    }
}
