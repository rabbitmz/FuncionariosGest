<?php

use Illuminate\Database\Seeder;

class CategoriaCursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Pedreiro',    			
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Armador de Ferro',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Barrador a gesso de paredes e tectos',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Ladrilhador',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Assentador de parquê',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Carpinteiro de tosco',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Carpinteiro marceneiro',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Vidraceiro',
    	] );
    	
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Canalizador',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Electricista de construção civil',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Pintor de construção civil',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Pintor de superfícies metálicas, plastificadores e envernizadores',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Seralheiro Civil',
    	] );
    	DB::table ( 'categoria_curso' )->insert ( [
    			'nome' => 'Soldador',
    	] );
    }
}
