<?php
use Illuminate\Database\Seeder;
class CompetenciaTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Leitura e Interpretacao de projectos de edificacao',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Implantação de Projectos estruturais',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Medição e Nivelamento',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Assentamento de blocos',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Amaracao de armadura e encimento de vigas e pilares',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Coferagem e descoferagem de elementos estruturais',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Amaração de armaduras e encimento da laje de pavimento e piso',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Ereccao de elementos de andaimes simples e de media complexidade',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Rebocos de alvenarias e tectos',
				'profissao_id' => '1' 
		
		] );
		DB::table ( 'competencia' )->insert ( [ 
				'nome' => 'Colocacao de pirfis metalicos para vigase suporte de coberturas',
				'profissao_id' => '1' 
		
		] );
	}
}
