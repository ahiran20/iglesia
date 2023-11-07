<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bautizo')->nullable()->constrained('bautizos');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('genero');
            $table->string('preencuentrouno')->nullable();
            $table->string('preencuentrodos')->nullable();
            $table->string('preencuentrotres')->nullable();
            $table->string('preencuentrocuatro')->nullable();
            $table->date('fecha_de_encuento')->nullable();
            $table->string('postencuentrouno')->nullable();
            $table->string('postencuentrodos')->nullable();
            $table->string('postencuentrotres')->nullable();
            $table->string('postencuentrocuatro')->nullable();
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
        Schema::dropIfExists('encuentros');
    }
}
