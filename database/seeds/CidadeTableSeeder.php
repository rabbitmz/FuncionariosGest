<?php
use Illuminate\Database\Seeder;
class CidadeTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Maputo',
				'provincia_id' => '5' ,
		
		] );
		
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Matola',
				'provincia_id' => '6', 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Nampula',
				'provincia_id' => '7' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Beira',
				'provincia_id' => '9' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Chimoio' ,
				'provincia_id'=>'4',
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Nacala',
				'provincia_id' => '7' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Quelimane',
				'provincia_id' => '11' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Mocuba',
				'provincia_id' => '11' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Tete',
				'provincia_id' => '10' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Gurué',
				'provincia_id' => '11' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Lichinga',
				'provincia_id' => '8' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Pemba',
				'provincia_id' => '1' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Xai-Xai',
				'provincia_id' => '2' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Maxixe',
				'provincia_id' => '3' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Angoche',
				'provincia_id' => '9' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Cuamba',
				'provincia_id' => '8' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Montepuez',
				'provincia_id' => '1' ,
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Dondo',
				'provincia_id' => '9', 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Inhambane',
				'provincia_id' => '3', 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Chibuto',
				'provincia_id' => '2' 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Chokwé',
				'provincia_id' => '2' 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Ilha de Moçambique',
				'provincia_id' => '7' 
		
		] );
		DB::table ( 'cidade' )->insert ( [ 
				'nome' => 'Manica',
				'provincia_id' => '4' 
		
		] );
	}
}
