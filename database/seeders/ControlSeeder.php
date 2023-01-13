<?php

namespace Database\Seeders;

use App\Models\Control;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $control = new Control();
        $control->Nombre = "Introducción en el Código Ético de medidas específicas en este ámbito.";
        $control->Responsable = "Manuel";
        $control->Normativo = 1;
        $control->Preventivo = 1;
        $control->Detectivo = 0;
        $control->seguimiento_id = 1;
        $control->Descripcion = "";
        $control->Afectaprobabilidad = "Si";
        $control->Afectaimpacto = "Si";
        $control->Fechainicio = null;
        $control->Fechafin = null;
        $control->Periodicidadrevision = null;
        $control->Resultadoimplantacion = null;
        $control->Controldocumentado = null;
        $control->Fechaseguimiento = null;
        $control->Sugerencias = null;
        $control->Estado = null;
        $control->save();

        $control = new Control();
        $control->Nombre = "Remisión de recordatorios periódicos a los trabajadores sobre el necesario cumplimiento de las normas previstas en el código ético en relación con la prevención del delito de descubrimiento y revelación de secretos.";
        $control->Responsable = "Manuel";
        $control->Normativo = 0;
        $control->Preventivo = 1;
        $control->Detectivo = 0;
        $control->seguimiento_id = 1;
        $control->Descripcion = "";
        $control->Afectaprobabilidad = "Si";
        $control->Afectaimpacto = "Si";
        $control->Fechainicio = null;
        $control->Fechafin = null;
        $control->Periodicidadrevision = null;
        $control->Resultadoimplantacion = null;
        $control->Controldocumentado = null;
        $control->Fechaseguimiento = null;
        $control->Sugerencias = null;
        $control->Estado = null;
        $control->save();

        $control = new Control();
        $control->Nombre = "Revisión del protocolo de seguridad informática de la empresa, para incrementar las medidas de seguridad vigentes actualmente.";
        $control->Responsable = "Manuel";
        $control->Normativo = 1;
        $control->Preventivo = 1;
        $control->Detectivo = 0;
        $control->seguimiento_id = 1;
        $control->Descripcion = "";
        $control->Afectaprobabilidad = "Si";
        $control->Afectaimpacto = "Si";
        $control->Fechainicio = null;
        $control->Fechafin = null;
        $control->Periodicidadrevision = null;
        $control->Resultadoimplantacion = null;
        $control->Controldocumentado = null;
        $control->Fechaseguimiento = null;
        $control->Sugerencias = null;
        $control->Estado = null;
        $control->save();

    }
}
