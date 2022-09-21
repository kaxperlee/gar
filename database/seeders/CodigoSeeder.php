<?php

namespace Database\Seeders;

use App\Models\Codigo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class CodigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigo = new Codigo();

        $codigo->idCodigo = "1";
        $codigo->Codigo = "Tráfico ilegal de órganos humanos  (156 bis CP)";
        $codigo->Epigrafe = "1.1";
        $codigo->Descripcion = "Promover, favorecer, facilitar o publicitar la obt...";

        $codigo->save();

        $codigo = new Codigo();

        $codigo->idCodigo = "2";
        $codigo->Codigo = "Trata de seres humanos (Art. 177bis CP)";
        $codigo->Epigrafe = "2.1";
        $codigo->Descripcion = "En territorio español, desde España, en tránsito o con destino a ella, empleando violencia, intimidación o engaño, o abusando de situación de superioridad o necesidad o vulnerabilidad de víctima, o mediante entrega o recepción de pagos o beneficios para lograr consentimiento sobre la víctima, la captare, transportare, trasladare, acogiere, o recibiere, con la finalidada de: a) Imponer trabajo o servicios forzados, la esclavitud o prácticas similares a la esclavitud, a la servidumbre o a la mendicidad. b) La explotación sexual, incluyendo la pornografía. c) La explotación para realizar actividades delictivas. d) La extracción de sus órganos corporales. e) La celebración de matrimonios forzados.";

        $codigo->save();
    }
}
