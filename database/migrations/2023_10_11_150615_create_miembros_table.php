<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_celu')->nullable()->constrained('celulas');
            $table->foreignId('id_bautizo')->nullable()->constrained('bautizos');
            $table ->string('nombre');
            $table ->string('apellido_completo');
            $table ->string('genero');
            $table ->date('fecha_nacimiento');
            $table ->integer('telefono');
            $table ->string('direccion');
            $table ->string('estado');
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
        Schema::dropIfExists('miembros');
    }
}
