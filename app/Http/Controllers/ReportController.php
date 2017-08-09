<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\ProfessionalSearch;
use App\Provincia;

class ReportController extends Controller {
	/**
	 * Display a home page of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$counter = 0;
		$ages = array ();
		$experiencesYears = array ();
		for($i = 17; $i <= 80; $i ++) {
			$ages [$counter] = $i;
			$counter = $counter + 1;
		}
		for($i = 0; $i <= 45; $i ++) {
			$experiencesYears [$i] = $i;
		}
		
		$provincias = Provincia::pluck('nome','id');
		// Show page with filters
		return view ( "report.report1", compact('ages','experiencesYears','provincias'));
		
	}
	
	
	public function filter(Request $request)
	{
		$resultSet = ProfessionalSearch::apply($request);
		
		return view("report.report2")->with('resultSet',$resultSet);
	}
}
