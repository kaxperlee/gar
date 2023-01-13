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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha')->nullable();
            $table->text('Observaciones')->nullable();

            $table->unsignedBigInteger('delito_id')->unique();
            $table->foreign('delito_id')->references('id')->on('delitos')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('manejo_id')->nullable();
            $table->foreign('manejo_id')->references('id')->on('manejos')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('calificacion_id')->nullable();
            $table->foreign('calificacion_id')->references('id')->on('calificacions')
            ->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('seguimientos');
    }
};
