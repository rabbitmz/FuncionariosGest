<?php

use Illuminate\Database\Seeder;

class NivelProfessionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'nivel_professional' )->insert ( [
    			'descricao' => 'Ajudante',    		  			
    	] );
    	DB::table ( 'nivel_professional' )->insert ( [
    			'descricao' => 'Auxiliar',
    	] );
    	DB::table ( 'nivel_professional' )->insert ( [
    			'descricao' => 'Mestre',
    	] );
    }
}
