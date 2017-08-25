<?php

use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'tipo_documento' )->insert ( [
    			'descricao' => 'BI',   	    			
    	] );
    	DB::table ( 'tipo_documento' )->insert ( [
    			'descricao' => 'Passporte',
    	] );
    	DB::table ( 'tipo_documento' )->insert ( [
    			'descricao' => 'Talão De BI',
    	] );
    	DB::table ( 'tipo_documento' )->insert ( [
    			'descricao' => 'Cedula',
    	] );
    	DB::table ( 'tipo_documento' )->insert ( [
    			'descricao' => 'Cartão de Eleitor',
    	] );
    }
}
