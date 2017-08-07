<?php

use Illuminate\Database\Seeder;

class AreaEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Edifícios e Monumentos',
    			'numeracao' => 'I',
    	]);
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Obras Hidráulicas',
    			'numeracao' => 'II',
    	]);
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Vias de Comunicação',
    			'numeracao' => 'III',
    	]);
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Obras de Urbanização',
    			'numeracao' => 'IV',
    	]);
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Instalações',
    			'numeracao' => 'V',
    	]);
    	DB::table('area_empresa')->insert([
    			'descricao' => 'Fundações e captações de água',
    			'numeracao' => 'VI',
    	]);
    }
}
