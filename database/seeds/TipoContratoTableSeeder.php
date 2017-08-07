<?php

use Illuminate\Database\Seeder;

class TipoContratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'tipo_contrato' )->insert ( [
    			'descricao' => 'Temporário',
    	] );
    	DB::table ( 'tipo_contrato' )->insert ( [
    			'descricao' => 'Permanente',
    	] );
    }
}
