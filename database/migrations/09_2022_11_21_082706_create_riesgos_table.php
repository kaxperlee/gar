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
        Schema::create('riesgos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',400);
            $table->string('Descripcion',1000);

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
        Schema::dropIfExists('riesgos');
    }
};
