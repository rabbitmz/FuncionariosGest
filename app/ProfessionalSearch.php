<?php

namespace App;

use Illuminate\Http\Request;
use App\Professional;

class ProfessionalSearch {
	
	public static function apply(Request $filters)
	{
		$query = (new Professional)->newQuery();
		
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
