<?php

namespace Database\Seeders;

use App\Models\Riesgo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $riesgo = new Riesgo();
        $riesgo->Nombre= "Tratamiento de datos de carácter personal externos: clientes, proveedores, colaboradores, profesionales, o cualquier otra persona o sociedad, con la que PLD SPACE pueda mantener relaciones empresariales";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Tratamiento de datos de carácter personal internos: profesionales, empleados, colaboradores, etc.";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Utilización legítima de los secretos de empresa de terceros.";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Utilización ilegítima de los secretos de empresa de terceros por parte de trabajadores incorporados a PLD SPACE, procedentes de sus empresas de origen.";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Uso de las tecnologías de información y comunicación por parte de los empleados.";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Acceso y utilización por parte del personal de las bases de datos, con información sensible ";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Posibles ataques exteriores que impliquen fugas de información reservada";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();

        $riesgo = new Riesgo();
        $riesgo->Nombre= "Posibles actuaciones de los proveedores de la empresa";
        $riesgo->Descripcion = "";
        $riesgo->Estado = "";
        $riesgo->seguimiento_id = 1;
        $riesgo->save();
    }
}
