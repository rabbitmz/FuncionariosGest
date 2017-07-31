<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalNivelAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_nivel_academico', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professional_id')->unsigned();
            $table->integer('nivel_academico_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('professional_nivel_academico', function(Blueprint $table) {
            $table->foreign('professional_id')->references('id')->on('professional');
        });
        
        Schema::table('professional_nivel_academico', function(Blueprint $table) {
            $table->foreign('nivel_academico_id')->references('id')->on('nivel_academico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_nivel_academico');
    }
}
