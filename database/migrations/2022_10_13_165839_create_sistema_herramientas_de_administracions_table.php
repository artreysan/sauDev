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
        Schema::create('sistema_herramientas_de_administracions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idSistema');
            $table->unsignedInteger('idEquipo');
            $table->string('cache');
            $table->string('openshift');
            $table->string('pentaho');
            $table->string('owncloud');
            $table->string('matomo');
            $table->string('plone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistema_herramientas_de_administracions');
    }
};
