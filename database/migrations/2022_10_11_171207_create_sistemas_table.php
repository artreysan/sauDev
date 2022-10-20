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
        Schema::create('sistemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idEquipo');
            $table->string('cuentaDirectorioActivo');
            $table->string('nombreCompletoSistema');
            $table->string('nombreCortoSistema');
            $table->string('ipOrigen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
};
