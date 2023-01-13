<?php

namespace Database\Factories;
use App\Models\Codigo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seguimiento>
 */
class SeguimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $riesgo = Codigo::all()->random();
        return [
            'idCodigo' => $riesgo->idCodigo,
            'Epigrafe' => $riesgo->Epigrafe,
            'Fecha' => $this->faker->dateTimeThisYear('+1 month'),
            'Codigo' => $riesgo->Codigo,
            'aux_calificacion_id' => $this->faker->randomElement(['1','2','3','4']),
            'aux_manejo_id' => $this->faker->randomElement(['1','2','3']),
        ];
    }
}
