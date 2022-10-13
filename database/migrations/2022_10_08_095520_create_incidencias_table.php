<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('idCodigo');
            $table->string("Epigrafe",10);
            $table->date('Fecha');
            $table->string("Codigo",200);
            $table->string("Caracter",20);
            $table->text('Descripcion');
            $table->text('RiesgoA');
            $table->string("InformarA",100);
            $table->string("Remitente",100);
            $table->string("Canal",100);
            $table->date("FechaT");
            $table->string("Propuesta",100);
            $table->string("NivelRP",100);
            $table->text('ComunicarA');
            $table->text('Autoria');
            $table->text('Observaciones');
            $table->text('Propuestas');
            $table->string('Estado',8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
};
