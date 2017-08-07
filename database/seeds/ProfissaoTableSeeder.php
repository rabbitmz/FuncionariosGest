<?php
use Illuminate\Database\Seeder;
class ProfissaoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Pedreiro' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Fazedor de blocos' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Barrador de gesso' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Armador de Ferro' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Montador de coferagem' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Assentador de parquê' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Carpinteiro de tosco' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Carpinteiro marceneiro' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Canalizador Industrial' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Canalizador Predial' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Electricista Instalador Predial' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Electricista Industrial' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Electricista de construção civil' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Pintor de construção civil' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Pintor de superfícies metálicas, plastificadores e envernizadores' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Soldador' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Seralheiro Civil' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Montador de andeimes' 
		
		] );
		DB::table ( 'profissao' )->insert ( [ 
				'descricao' => 'Outros' 
		
		] );
	}
}
