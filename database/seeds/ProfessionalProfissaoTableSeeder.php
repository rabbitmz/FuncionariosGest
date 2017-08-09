<?php
use Illuminate\Database\Seeder;
class ProfessionalProfissaoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'professional_profissao' )->insert ( [ 				
				'professional_id' => '1',
				'profissao_id' => '1',
				'nivel_professional_id' => '1',
				'primaria' => '1' 
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [ 				
				'professional_id' => '1',
				'profissao_id' => '2',
				'nivel_professional_id' => '1',
				'primaria' => '0' 
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '2',
				'profissao_id' => '2',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '2',
				'profissao_id' => '4',
				'nivel_professional_id' => '1',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '3',
				'profissao_id' => '3',
				'nivel_professional_id' => '1',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '3',
				'profissao_id' => '5',
				'nivel_professional_id' => '2',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '4',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '4',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
	}
}
