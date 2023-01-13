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
            $table->date('Fecha');
            $table->text('Descripcion');
            $table->text('RiesgoA');
            $table->string("InformarA",100);
            $table->string("Remitente",100);
            $table->date("FechaT");
            $table->string("Propuesta",100);
            $table->string("NivelRP",100);
            $table->text('ComunicarA');
            $table->text('Autoria');
            $table->text('Observaciones');
            $table->text('Propuestas');
            $table->enum('Estado', ['abierto', 'cerrado']);
            $table->unsignedBigInteger('delito_id')->nullable();
            $table->foreign('delito_id')->references('id')->on('delitos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('canal_id')->nullable();
            $table->foreign('canal_id')->references('id')->on('canals')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('caracter_id')->nullable();
            $table->foreign('caracter_id')->references('id')->on('caracters')->onDelete('cascade')->onUpdate('cascade');
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
