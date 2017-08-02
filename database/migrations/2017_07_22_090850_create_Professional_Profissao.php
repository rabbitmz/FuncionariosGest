<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalProfissao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_profissao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professional_id')->unsigned();
            $table->integer('profissao_id')->unsigned();
            $table->integer('nivel_professional_id')->unsigned();
            $table->timestamp('data_inicio')->nullable();
            $table->timestamp('data_fim')->nullable();
            $table->boolean('primaria');
            $table->timestamps();
        });
        
        Schema::table('professional_profissao', function(Blueprint $table) {
            $table->foreign('professional_id')->references('id')->on('professional');
        });
        
        Schema::table('professional_profissao', function(Blueprint $table) {
            $table->foreign('profissao_id')->references('id')->on('profissao');
        });
        
        Schema::table('professional_profissao', function(Blueprint $table) {
            $table->foreign('nivel_professional_id')->references('id')->on('nivel_professional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_profissao');
    }
}
