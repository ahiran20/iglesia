<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLideresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lideres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_encuentro')->nullable()->constrained('encuentros');
            $table ->string('primeraclase_m_uno')->nullable();
            $table ->string('segundaclase_m_uno')->nullable();
            $table ->string('terceraclase_m_uno')->nullable();
            $table ->string('cuartaclase_m_uno')->nullable();
            $table ->string('primeraclase_m_dos')->nullable();
            $table ->string('segundaclase_m_dos')->nullable();
            $table ->string('terceraclase_m_dos')->nullable();
            $table ->string('cuartaclase_m_dos')->nullable();
            $table ->string('primeraclase_m_tres')->nullable();
            $table ->string('segundaclase_m_tres')->nullable();
            $table ->string('terceraclase_m_tres')->nullable();
            $table ->string('cuartaclase_m_tres')->nullable();
            $table ->date('defendio')->nullable();
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
        Schema::dropIfExists('lideres');
    }
}
