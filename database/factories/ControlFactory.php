<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seguimiento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Control>
 */
class ControlFactory extends Factory
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
