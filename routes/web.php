<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get ( '/', function () {
	return view ( 'welcome' );
} );
// Route::get ( '/createEmployee', function () {
// 	return view ( 'employee.create' );
// } );


//Create Colaborator
Route::get("/createColaborator", ['as' => 'createEmployee', 'uses' => 'ColaboratorController@colaboratorForm']);
Route::post("/createColaborator/page1", ['uses' => 'ColaboratorController@storeColaboratorForm']);
Route::get("/createColaborator/page1", ['uses' => 'ColaboratorController@onPageOne']);
Route::post("/createColaborator/page2", ['uses' => 'ColaboratorController@onPageTwo']);
Route::post("/createColaborator/page3", ['uses' => 'ColaboratorController@onPageThree']);
Route::post("/createColaborator/page4", ['uses' => 'ColaboratorController@onPageFour']);
Route::post("/createColaborator/page5", ['uses' => 'ColaboratorController@onPageFive']);
Route::post("/createColaborator/page6", ['uses' => 'ColaboratorController@onPageSix']);

//List Colaborator
Route::get("/listAll", ['as' => 'listAll', 'uses' => 'ColaboratorController@index']);

//View colaborator
Route::get("/viewColaborator", ['as' => 'viewColaborator', 'uses' => 'ColaboratorController@getViewColaboratorSearchView']);
Route::post("/viewColaborator/page2", ['uses' => 'ColaboratorController@getColaboratorByNameOrDocumentIdentification']);
Route::get("/showColaborator/{id}", ['as' => 'showColaborator', 'uses' => 'ColaboratorController@show']);

//Edit Colaborator 
Route::get("/editColaborator", ['as' => 'editEmployee', 'uses' => 'ColaboratorController@getEditColaboratorSearchView']);
Route::post("/editColaborator/page2", ['uses' => 'ColaboratorController@getColaboratorByNameOrDocumentIdentificationEdit']);
Route::get("/editColaborator/{id}", ['as' => 'editColaborator', 'uses' => 'ColaboratorController@edit']);
Route::post("/editColaborator/page4", ['uses' => 'ColaboratorController@onEditPageFour']);
Route::post("/editColaborator/page5", ['uses' => 'ColaboratorController@onEditPageFive']);
Route::post("/editColaborator/page6", ['uses' => 'ColaboratorController@onEditPageSix']);
Route::post("/editColaborator/page7", ['uses' => 'ColaboratorController@onEditPageSeven']);
Route::post("/editColaborator/page8", ['uses' => 'ColaboratorController@onEditPageEight']);
Route::post("/editColaborator/page9", ['uses' => 'ColaboratorController@onEditPageNine']);

//Generate Report
Route::get("/report", ['uses' => 'ReportController@index']);
Route::post('/search',['uses' => 'ReportController@filter']);
Route::get('/download',['as'=>'downloadPdf','uses' => 'ReportController@downloadPdf']);

