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
        Schema::create('delitos', function (Blueprint $table) {
            $table->id();
            $table->string('Epigrafe',6);
            $table->string('Delito',100);
            $table->string('Codigo',10);
            $table->text('Descripcion',1000);
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
        Schema::dropIfExists('delitos');
    }
};
