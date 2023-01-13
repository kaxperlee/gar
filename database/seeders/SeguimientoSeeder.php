<?php

namespace Database\Seeders;

use App\Models\Seguimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeguimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seguimiento = new Seguimiento();
        $seguimiento->Fecha = "2023-01-01";
        $seguimiento->Observaciones = NULL;
        $seguimiento->delito_id = 4;
        $seguimiento->manejo_id = 1;
        $seguimiento->calificacion_id = 1;
        $seguimiento->save();

        $seguimiento = new Seguimiento();
        $seguimiento->Fecha= "2023-01-01";
        $seguimiento->Observaciones = NULL;
        $seguimiento->delito_id = 5;
        $seguimiento->manejo_id = 1;
        $seguimiento->calificacion_id = 1;
        $seguimiento->save();
    }
}
