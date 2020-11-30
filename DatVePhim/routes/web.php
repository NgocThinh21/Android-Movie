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
use App\Models\phim;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', 'LoginController@Login');



Route::get('/admin', 'MovieController@admin');
Route::get('/addmovie', 'MovieController@addmovie');
Route::post('/savemovie', 'MovieController@savemovie');
Route::get('/allmovie', 'MovieController@allmovie');
Route::get('/active/{id}', 'MovieController@active');
Route::get('/unactive/{id}', 'MovieController@unactive');
Route::get('/editmovie/{id}', 'MovieController@editmovie');
Route::post('/save_editmovie/{id}', 'MovieController@save_editmovie');
Route::get('/deletemovie/{id}', 'MovieController@deletemovie');



