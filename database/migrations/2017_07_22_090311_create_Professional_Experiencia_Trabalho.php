<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalExperienciaTrabalho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_experiencia_trabalho', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professional_id')->unsigned();
            $table->integer('experiencia_id')->unsigned();
            $table->timestamp('data_inicio');
            $table->timestamp('data_fim');
            $table->timestamps();
        });
        
        Schema::table('professional_experiencia_trabalho', function(Blueprint $table) {
            $table->foreign('professional_id')->references('id')->on('professional');
        });
        
        Schema::table('professional_experiencia_trabalho', function(Blueprint $table) {
            $table->foreign('experiencia_id')->references('id')->on('experiencia_trabalho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_experiencia_trabalho');
    }
}
