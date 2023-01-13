<?php

namespace Database\Seeders;

use App\Models\Actual;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actual = new Actual();
        $actual->Nombre = "Protocolo de seguridad informática";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Anexos a contratos de trabajo con cláusulas de confidencialidad para proteger secretos propios";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Dispositivos de videovigilancia";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 0;
        $actual->Preventivo = 0;
        $actual->Detectivo = 1;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Acuerdos de confidencialidad con proveedores";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Posibilidad de monitorizar los correos electrónicos del trabajador";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Posibilidad de utilizar grabaciones en vídeo";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 0;
        $actual->Preventivo = 0;
        $actual->Detectivo = 1;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Pacto de no competencia post-contractual";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Segmentación accesos informáticos";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 0;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Registro accesos";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 0;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();

        $actual = new Actual();
        $actual->Nombre = "Protocolo de eliminación de datos cuando un trabajador sale de la empresa";
        $actual->Responsable = "Manuel";
        $actual->Normativo = 1;
        $actual->Preventivo = 1;
        $actual->Detectivo = 0;
        $actual->clasecontrol_id= 1;
        $actual->seguimiento_id = 1;
        $actual->Descripcion = "";
        $actual->save();
    }



}
