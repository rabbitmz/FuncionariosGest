<?php

use Illuminate\Database\Seeder;

class ActividadeEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Estruturas de betão armado ou pre-esforçado',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Estruturas metálicas',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Demolições',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Trabalhos de carpintaria e de toscos e de limpos',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Caixilharias metálicas e vidros',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Pinturas e outros revestimentos correntes',
    			'area_empresa_id' => '1',
    	]);
    	DB::table('actividade_empresa')->insert([
    			'descricao' => 'Limpeza e conservação de edifícios',
    			'area_empresa_id' => '1',
    	]);
    }
}
