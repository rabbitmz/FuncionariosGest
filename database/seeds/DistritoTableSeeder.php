<?php
use Illuminate\Database\Seeder;
class DistritoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Ancuabe',
				'provincia_id' => '1', 
		
		] );
		
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Balama',
				'provincia_id' => '1', 
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Chiúre',
				'provincia_id' => '1', 
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Ibo',
				'provincia_id' => '1',   
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Macomia',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Mecúfi',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Meluco',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Metuge',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Mocímboa da Praia',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Montepuez',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Mueda',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Muidumbe',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Namuno',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Nangade',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Palma',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Pemba',
				'provincia_id' => '1',  
		
		] );
		DB::table ( 'distrito' )->insert ( [ 
				'nome' => 'Quissanga',
				'provincia_id' => '1',  
		
		] );

		
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Bilene',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Chibuto',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Chicualacuala',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Chigubo',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Chókwè',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Guijá',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Mabalane',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Manjacaze',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Massangena',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Massingir',
				'provincia_id' => '2',
				
		] );
		DB::table ( 'distrito' )->insert ( [
				'nome' => 'Xai-Xai',
				'provincia_id' => '2',
				
		] );
	}
}
