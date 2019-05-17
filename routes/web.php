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

/*
Route::get('/jlist', function () {
    return view('pages.jlist');
});

Route::get('/alist', function () {
    return view('pages.alist');
});
*/
//Route::get('/alist', 'PagesController@alist');
// Route::get('/jlist', 'PagesController@jlist');
//Route::get('/createjotrial', 'PagesController@createjo');
// Route::get('/realign', 'PagesController@realign');
// Route::get('/edit', 'PagesController@edit');

// Route::get('/', 'PpmpsController@index');
// Route::get('/createppmp', 'PpmpsController@create');

Route::get('/jo_list', 'JobOrdersController@index');
Route::get('/createjo', 'JobOrdersController@create');
Route::get('/showjo', 'JobOrdersController@show');
Route::get('/accounts', 'AccountsController@index');
// Route::get('/accounts/create/{accounts}', 'AccountsController@index');

Route::get('/', 'AppsController@index');
Route::get('/showapps', 'AppsController@show');
Route::get('/accounts', 'AccountsController@index');

Route::any('/accounts/edit', 'AccountsController@transferFunds');

// Route::resource('ppmps', 'PpmpsController');
Route::resource('joborders', 'JobOrdersController');
Route::resource('accounts', 'AccountsController');
Route::resource('apps', 'AppsController');
Route::resource('costcenters', 'CostCentersController');
// Route::resource('filters', 'FIltersController');

// Route search 
Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);

// PDF route
Route::get('/downloadPDF/{id}','JobOrdersController@downloadPDF');