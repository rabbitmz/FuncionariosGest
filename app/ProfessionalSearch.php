<?php

namespace App;

use Illuminate\Http\Request;
use App\Professional;
use Carbon\Carbon;

class ProfessionalSearch {
	public static function apply(Request $filters) {
		$query = (new Professional ())->newQuery ();
		
		if($filters->has("name"))
		{
		$query->where('nome', $filters->input('name'))
		->orWhere('nome', 'like', '%' . $filters->input('name'). '%')->get();
		}
		if($filters->has("docNumber"))
		{
		$query->where('numero_documento', $filters->input('docNumber'));
		}
		
		if ($filters->has ( 'gender' ) && strcmp($filters->input ('gender'),'N')!=0) {
			$query->where ( 'genero', $filters->input ( 'gender' ) );
		}
		
		if ($filters->has ( 'addressProv' )) {
			$query->where ( 'endereco_provincia_id', '=', $filters->input ( 'addressProv' ) );
		}		
		if ($filters->has ( 'educationLevel' ) && strcmp($filters->input ('educationLevel'),'NONE')!=0) {
			$query->where ( 'tem_nivel_academico', '=', $filters->input ( 'educationLevel' ) );
		}
		
		if ($filters->has ( 'generalEducation' )) {
			$query->where ( 'tem_ensino_geral', '=', '1');
			$query->where ( 'classe_id', '=', $filters->input ( 'schooLevel' ));
		}
		if ($filters->has ( 'technicalEducation' )) {
			$query->where ( 'tem_ensino_tecnico', '=', '1');
		}
		if ($filters->has ( 'university' )) {
			$query->where ( 'tem_ensino_universitario', '=', '1');
		}
		
	
		
// 		if($filters->has('ageMin') && strcmp($filters->input ('ageMin'),'0')!=0)
// 		{
// 			$minDateOfBirth = Carbon::now()->subYears($filters->input('ageMin'));
		
// 			$query->where( 'data_nascimento', '>=',"'".$minDateOfBirth->toDateString()."'" );
		
		
// 		}
// 		if($filters->has('ageMax')  && strcmp($filters->input ('ageMax'),'0')!=0)
// 		{
		
// 			$maxDateOfBirth = Carbon::now()->subYears($filters->input('ageMax'));
// 			$query->where( 'data_nascimento', '<=',"'".$maxDateOfBirth->toDateString()."'");
			
// 		}
	
		
		$result = $query->get ();
		
		return $result;
	}
}
