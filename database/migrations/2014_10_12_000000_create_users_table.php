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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('funcion');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin');
            $table->timestamps();
            $table->integer('solicitudes');
            $table->ipAddress('ipFija');
            $table->string('internet');
            $table->string('vpn');
            $table->string('gitlab');
            $table->string('jira');
            $table->string('glpi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
