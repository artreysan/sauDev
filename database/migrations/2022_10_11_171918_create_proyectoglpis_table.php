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
        Schema::create('proyectoglpis', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idProyecto');
            $table->unsignedInteger('idUsuario');
            $table->string('poryecto');
            $table->string('coordinador');
            $table->string('nivelDeAcceso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoglpis');
    }
};
