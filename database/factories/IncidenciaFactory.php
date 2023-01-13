<?php

namespace Database\Factories;

use App\Models\Canal;
use App\Models\Caracter;
use App\Models\Delito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incidencia>
 */
class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $riesgo = Delito::all()->random();
        $caracter = Caracter::all()->random();
        $canal = Canal::all()->random();

        return [
           // 'idCodigo' => Codigo::all()->random()->id,
            'delito_id' => $riesgo->id,

            'Fecha' => $this->faker->dateTimeThisYear('+1 month'),

            'caracter_id' => $caracter->id,
            'Descripcion' => $this->faker->text(120),
            'RiesgoA' => $this->faker->text(120),
            'InformarA' => $this->faker->word(20),
            'Remitente' => $this->faker->word(20),
            'canal_id' => $canal->id,
            'FechaT' => $this->faker->dateTimeThisYear('+1 month'),
            'Propuesta' => $this->faker->sentence(),
            'NivelRP' => $this->faker->randomElement(['Bajo','Normal', 'Alto']),
            'Comunicara' => $this->faker->word(20),
            'Autoria' => $this->faker->sentence(),
            'Observaciones' => $this->faker->text(300),
            'Propuestas' => $this->faker->text(300),

        ];

    }
}
