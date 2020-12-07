<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Numero_Cedula')->unique();
            $table->string('Primer_Nombre',70);
            $table->string('Segundo_Nombre',70)->nullable();
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->bigInteger('Telefono');
            $table->bigInteger('Ciudad_id')->unsigned();
            $table->foreign('Ciudad_id')->references('id')->on('ciudades');
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
        Schema::dropIfExists('conductores');
    }
}
