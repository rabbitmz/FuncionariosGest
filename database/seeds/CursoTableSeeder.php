<?php

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Leitura e Interpretação de projectos de edificação',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Implantação de Projectos estruturais',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Medição e Nivelamento',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Assentamento de blocos',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Amaração de armadura e encimento de vigas e pilares',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Coferagem e descoferagem de elementos estruturais',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Amaração de armaduras e encimento da laje de pavimento e piso',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Erecção de elementos de andaimes simples e de media complexidade',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Rebocos de alvenarias e tectos',
    			'categoria_curso_id' => '1',
    	] );
    	DB::table ( 'curso' )->insert ( [
    			'nome' => 'Colocação de pirfis metalicos para vigase suporte de coberturas',
    			'categoria_curso_id' => '1',
    	] );
    	
    }
}
