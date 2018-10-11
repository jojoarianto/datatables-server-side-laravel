<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('regions', 'RegionController@index');
Route::get('/serverSide', [
	'as' => 'serverSide',
	'uses' => function () {
		$regions = App\Region::get(['_id', 'name', 'number']);
		return Datatables::collection(App\Region::get(['_id', 'name', 'number']))->make();
	},
]);
