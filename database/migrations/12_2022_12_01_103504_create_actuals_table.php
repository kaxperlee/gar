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
        Schema::create('actuals', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre',1000);
            $table->string('Responsable',150)->nullable();
            $table->boolean('Normativo')->nullable();
            $table->boolean('Preventivo')->nullable();
            $table->boolean('Detectivo')->nullable();
            $table->string('Descripcion',1000)->nullable();

            $table->unsignedBigInteger('clasecontrol_id')->nullable();
            $table->foreign('clasecontrol_id')
                ->references('id')->on('clasecontrols')
                ->onDelete('cascade');

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
        Schema::dropIfExists('actuals');
    }
};
