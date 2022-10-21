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
            'Caracter' => $this->faker->randomElement(['Norma','Urgente']),
            'Descripcion' => $this->faker->text(120),
            'RiesgoA' => $this->faker->text(120),
            'InformarA' => $this->faker->word(20),
            'Remitente' => $this->faker->word(20),
            'Canal' => $this->faker->randomElement(['Email','Fax', 'Papel','Otro']),
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
