<?php

namespace Database\Seeders;

use App\Models\Delito;
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
        $codigo = new Delito();
        $codigo->Epigrafe= "1";
        $codigo->Delito= "Tráfico ilegal de órganos humanos";
        $codigo->Codigo= "156bis.3";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "2";
        $codigo->Delito= "Trata de seres humanos";
        $codigo->Codigo= "177bis.7";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "3";
        $codigo->Delito= "Delitos relativos a prostitución / explotación sexual / corrupción de menores";
        $codigo->Codigo= "189bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "4";
        $codigo->Delito= "Descubrimiento y revelación de secretos, y allanamiento informático";
        $codigo->Codigo= "197quinquies";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "5";
        $codigo->Delito= "Estafas";
        $codigo->Codigo= "251bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "6";
        $codigo->Delito= "Frustración de la ejecución";
        $codigo->Codigo= "258ter";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "7";
        $codigo->Delito= "Insolvencias punibles";
        $codigo->Codigo= "261bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "8";
        $codigo->Delito= "Daños informáticos";
        $codigo->Codigo= "264quater";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "9";
        $codigo->Delito= "Contra la propiedad intelectual e industrial, el mercado y los consumidores";
        $codigo->Codigo= "288";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "10";
        $codigo->Delito= "Blanqueo de capitales";
        $codigo->Codigo= "302.2";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "11";
        $codigo->Delito= "Financiación ilegal de los partidos políticos";
        $codigo->Codigo= "304 bis.5";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "12";
        $codigo->Delito= "Delitos contra la Hacienda Pública y contra la Seguridad Social";
        $codigo->Codigo= "310bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "13";
        $codigo->Delito= "Delitos contra los derechos de los ciudadanos extranjeros";
        $codigo->Codigo= "318bis.5";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "14";
        $codigo->Delito= "Delitos de Urbanización, construcción o edificación no autorizables";
        $codigo->Codigo= "319.4";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "15";
        $codigo->Delito= "Delitos contra los recursos naturales y el medio ambiente";
        $codigo->Codigo= "328";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "16";
        $codigo->Delito= "Delitos relativos a las radiaciones ionizantes";
        $codigo->Codigo= "343.3";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "17";
        $codigo->Delito= "Delitos de riesgo provocados por explosivos y otros agentes";
        $codigo->Codigo= "348.3";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "18";
        $codigo->Delito= "Delitos contra la salud pública (productos farmacéuticos y alimentarios)";
        $codigo->Codigo= "366";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "19";
        $codigo->Delito= "Delitos contra la salud pública (tráfico de drogas)";
        $codigo->Codigo= "369bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "20";
        $codigo->Delito= "Falsificación de moneda";
        $codigo->Codigo= "386.5";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "21";
        $codigo->Delito= "Falsificación de tarjetas de crédito y débito y cheques de viaje";
        $codigo->Codigo= "399bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "22";
        $codigo->Delito= "Cohecho";
        $codigo->Codigo= "427bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "23";
        $codigo->Delito= "Tráfico de influencias";
        $codigo->Codigo= "430";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "24";
        $codigo->Delito= "Delitos de odio y enaltecimiento";
        $codigo->Codigo= "510 bis";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "25";
        $codigo->Delito= "Financiación del terrorismo";
        $codigo->Codigo= "576";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "26";
        $codigo->Delito= "Malversación de caudales públicos";
        $codigo->Codigo= "432 y ss.";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "27";
        $codigo->Delito= "Delitos de acoso moral";
        $codigo->Codigo= "171.1";
        $codigo->Descripcion = "";
        $codigo->save();



        $codigo = new Delito();
        $codigo->Epigrafe= "28";
        $codigo->Delito= "Delitos de acoso sexual";
        $codigo->Codigo= "184";
        $codigo->Descripcion = "";
        $codigo->save();



    }
}
