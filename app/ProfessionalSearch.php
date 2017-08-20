<?php

namespace App;

use Illuminate\Http\Request;
use App\Professional;

class ProfessionalSearch {
	
	public static function apply(Request $filters)
	{
		$query = (new Professional)->newQuery();
		
		if($filters->has("name"))
		{
			$query->where('nome', $filters->input('name'))
			->orWhere('nome', 'like', '%' . $filters->input('name'). '%')->get();
			
// 			$query->where('nome', $filters->input('name'));
		}
		if($filters->has("docNumber"))
		{
			$query->where('numero_documento', $filters->input('docNumber'));
		}	
		
		if($filters->has('gender'))
		{
			$query->where('genero', $filters->input('gender'));
		}
		
		if($filters->has('addressProv'))
		{
			$query->where('endereco_provincia_id', $filters->input('addressProv'));
		}
		
				
		$result = $query->get();
		
		return $result;
	}
}
