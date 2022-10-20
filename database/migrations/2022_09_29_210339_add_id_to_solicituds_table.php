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
        Schema::table('solicituds', function (Blueprint $table) {
            $table->string('fileID')->nullable()->unique();
            $table->string('emailSend')->after('apellido_materno');
            $table->unsignedInteger('userID');
            $table->unsignedInteger('startTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicituds', function (Blueprint $table) {
            $table->string('fileID');
            $table->string('emailSend');
            $table->unsignedInteger('userID');
            $table->unsignedInteger('startTime');
        });
    }
};
