<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBautizosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bautizos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_miembro')->nullable()->constrained('miembros');
            $table->integer('ci');
            $table->string('encargado_del_bautizo');
            $table->string('testigo');
            $table->date('fecha_de_bautizo');
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
        Schema::dropIfExists('bautizos');
    }
}
