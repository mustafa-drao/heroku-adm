<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/',function () {
    return view('welcome');
});
Route::get('browser','CustomersController@index');
Route::get('search','MoviesController@search')->name('search');
Route::get('Clustering/{id}','MoviesController@Clustering')->name('search');
Route::get('Classification','MoviesController@Classification')->name('search');
Route::get('actors_friends','MoviesController@actors_friends')->name('search');
Route::get('orderMovie','MoviesController@search');
Route::get('new-customer','CustomersController@insert');
Route::post('new-customer','CustomersController@insert');
Route::get('customer/{id}','CustomersController@view');

Route::get('ActorSearch','MoviesController@Actorsearch')->name('search');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
