<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('provincia')->insert([
    			'nome' => 'Cabo Delgado',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Gaza',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Inhambane',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Manica',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Maputo Cidade',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Maputo',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Nampula',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Niassa',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Sofala',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Tete',
    			
    	]);
    	DB::table('provincia')->insert([
    			'nome' => 'Zambézia',
    			
    	]);
    }
}
