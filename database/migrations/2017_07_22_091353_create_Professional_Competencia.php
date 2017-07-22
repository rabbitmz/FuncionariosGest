<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalCompetencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_competencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professional_id')->unsigned();
            $table->integer('profissao_id')->unsigned();
            $table->integer('competencia_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('professional_competencia', function(Blueprint $table) {
            $table->foreign('professional_id')->references('id')->on('professional');
        });
        
        Schema::table('professional_competencia', function(Blueprint $table) {
            $table->foreign('profissao_id')->references('id')->on('profissao');
        });
        
        Schema::table('professional_competencia', function(Blueprint $table) {
            $table->foreign('competencia_id')->references('id')->on('competencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_competencia');
    }
}
