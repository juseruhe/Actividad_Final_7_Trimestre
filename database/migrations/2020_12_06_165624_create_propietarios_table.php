<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->integer('Numero_Cedula')->unique();
            $table->string('Primer_Nombre',70);
            $table->string('Segundo_Nombre',70);
            $table->string('Apellidos');
            $table->string('Direccion');
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
        Schema::dropIfExists('propietarios');
    }
}
