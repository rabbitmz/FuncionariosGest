<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2010-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')				
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [ 				
				'professional_id' => '1',
				'profissao_id' => '2',
				'nivel_professional_id' => '1',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2013-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '2',
				'profissao_id' => '2',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2010-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
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
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2010-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '3',
				'profissao_id' => '5',
				'nivel_professional_id' => '2',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2013-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '4',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '4',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '5',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2013-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '5',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2013-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '6',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2015-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '6',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2010-01-01'),
				'data_fim'=>Carbon::parse('2016-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '7',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '7',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '8',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '8',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '9',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '9',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '10',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '10',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1'
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '11',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
				
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '11',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '12',
				'profissao_id' => '6',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '12',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '13',
				'profissao_id' => '1',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '13',
				'profissao_id' => '3',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '14',
				'profissao_id' => '1',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '14',
				'profissao_id' => '3',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2013-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '15',
				'profissao_id' => '1',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2014-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '15',
				'profissao_id' => '3',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2014-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '16',
				'profissao_id' => '1',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2015-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '16',
				'profissao_id' => '3',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2002-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '17',
				'profissao_id' => '1',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2000-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '17',
				'profissao_id' => '3',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2001-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '18',
				'profissao_id' => '4',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '18',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '19',
				'profissao_id' => '4',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '19',
				'profissao_id' => '7',
				'nivel_professional_id' => '1',
				'primaria' => '1'
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '20',
				'profissao_id' => '4',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '20',
				'profissao_id' => '7',
				'nivel_professional_id' => '3',
				'primaria' => '1',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '21',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0',
				'data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '21',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '22',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '22',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '23',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '23',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '24',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '24',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '25',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('2012-01-01'),
				'data_fim'=>Carbon::parse('2017-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '25',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '26',
				'profissao_id' => '10',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '26',
				'profissao_id' => '8',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '27',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '27',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '28',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '28',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '29',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '29',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '30',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '30',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '31',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '31',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1999-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '32',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '32',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '33',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '33',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '34',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '34',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '35',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '35',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '36',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '36',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '37',
				'profissao_id' => '18',
				'nivel_professional_id' => '2',
				'primaria' => '0','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		DB::table ( 'professional_profissao' )->insert ( [
				'professional_id' => '37',
				'profissao_id' => '14',
				'nivel_professional_id' => '3',
				'primaria' => '1','data_inicio'=>Carbon::parse('1991-01-01'),
				'data_fim'=>Carbon::parse('2005-01-01')
		] );
		
		
	}
}

