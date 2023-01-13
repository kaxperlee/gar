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
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',1000)->nullable();
            $table->boolean('Normativo')->nullable();
            $table->boolean('Preventivo')->nullable();
            $table->boolean('Detectivo')->nullable();
            $table->string('Responsable',100)->nullable();
            $table->string('Descripcion',1000)->nullable();
            $table->enum('Afectaprobabilidad', ['Si', 'No'])->nullable();
            $table->enum('Afectaimpacto', ['Si', 'No'])->nullable();
            $table->date('Fechainicio')->nullable();
            $table->date('Fechafin')->nullable();
            $table->string('Periodicidadrevision')->nullable();
            $table->string('Resultadoimplantacion')->nullable();
            $table->enum('Controldocumentado', ['Si', 'No'])->nullable();
            $table->date('Fechaseguimiento')->nullable();
            $table->string('Sugerencias',1000)->nullable();
            $table->tinyInteger('Estado')->nullable();

            $table->unsignedBigInteger('seguimiento_id')->nullable();
            $table->foreign('seguimiento_id')
                ->references('id')->on('seguimientos')
                ->onDelete('cascade');

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
        Schema::dropIfExists('controls');
    }
};
