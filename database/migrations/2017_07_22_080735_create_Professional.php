<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->string('genero')->length(1);
            $table->timestamp('data_nascimento')->nullable();
            $table->integer('tipo_documento_id')->unsigned();
            $table->string('numero_documento');
            $table->timestamp('data_emissao_documento')->nullable();
            $table->timestamp('data_validade_documento')->nullable();
            $table->integer('naturalidade_provincia_id')->unsigned();
            $table->integer('naturalidade_distrito_id')->unsigned();
            $table->integer('endereco_provincia_id')->unsigned();
            $table->integer('distrito_id')->unsigned();
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('quarteirao');
            $table->string('celula');
            $table->string('casa');
            $table->boolean('tem_nivel_academico');
            $table->boolean('tem_ensino_geral');
            $table->boolean('tem_ensino_tecnico');
            $table->boolean('tem_ensino_universitario');
            $table->integer('classe_id')->unsigned();
            $table->integer('telefone');
            $table->string('email');
            $table->timestamps();
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('naturalidade_provincia_id')->references('id')->on('provincia');
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('naturalidade_distrito_id')->references('id')->on('distrito');
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('endereco_provincia_id')->references('id')->on('provincia');
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('distrito_id')->references('id')->on('distrito');
        });

        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('classe_id')->references('id')->on('classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional');
    }
}
