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

Route::get("/createColaborator", ['as' => 'createEmployee', 'uses' => 'ColaboratorController@colaboratorForm']);
Route::post("/createColaborator/page1", ['uses' => 'ColaboratorController@onPageOne']);
Route::post("/createColaborator/page2", ['uses' => 'ColaboratorController@onPageTwo']);
Route::post("/createColaborator/page3", ['uses' => 'ColaboratorController@onPageThree']);
Route::post("/createColaborator/page4", ['uses' => 'ColaboratorController@onPageFour']);
Route::post("/createColaborator/page5", ['uses' => 'ColaboratorController@onPageFive']);
Route::post("/createColaborator/page6", ['uses' => 'ColaboratorController@onPageSix']);

