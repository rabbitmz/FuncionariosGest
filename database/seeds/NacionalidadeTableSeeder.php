<?php

use Illuminate\Database\Seeder;

class NacionalidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'nacionalidade' )->insert ( [
    			'nome' => 'Moçambicana',   	
    			
    	] );
    }
}
