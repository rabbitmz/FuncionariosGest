<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		// Show page with filters
		return view ( "report.report1" )->with ( 'listOfAges', $ages )->with ( 'experiencesYears', $experiencesYears );
	}
}
