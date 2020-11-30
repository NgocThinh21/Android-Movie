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

Route::get('/', function () {
    return view('welcome');
});
//tên phim
Route::get('/admin', 'phimController@admin');
Route::get('/addmovie', 'phimController@addmovie');
Route::get('/allmovie', 'phimController@allmovie');
Route::get('/editmovie/{id}', 'phimController@editmovie');
Route::post('/save_editmovie/{id}', 'phimController@save_editmovie');
Route::post('/savemovie', 'phimController@savemovie');
Route::get('/active/{id}', 'phimController@active');
Route::get('/unactive/{id}', 'phimController@unactive');
Route::get('/deletemovie/{id}', 'phimController@deletemovie');

//thể loại
Route::get('/addtheloai', 'theloaiController@addtheloai');
Route::get('/alltheloai', 'theloaiController@alltheloai');
Route::get('/edittheloai/{id}', 'theloaiController@edittheloai');
Route::post('/save_edittheloai/{id}', 'theloaiController@save_edittheloai');
Route::post('/savetheloai', 'theloaiController@savetheloai');
Route::get('/deletetheloai/{id}', 'theloaiController@deletetheloai');

//quốc gia
Route::get('/addquocgia', 'quocgiaController@addquocgia');
Route::get('/allquocgia', 'quocgiaController@allquocgia');
Route::get('/editquocgia/{id}', 'quocgiaController@editquocgia');
Route::post('/save_editquocgia/{id}', 'quocgiaController@save_editquocgia');
Route::post('/savequocgia', 'quocgiaController@savequocgia');
Route::get('/deletequocgia/{id}', 'quocgiaController@deletequocgia');

//nsx
Route::get('/addnsx', 'nsxController@addnsx');
Route::get('/allnsx', 'nsxController@allnsx');
Route::get('/editnsx/{id}', 'nsxController@editnsx');
Route::post('/save_editnsx/{id}', 'nsxController@save_editnsx');
Route::post('/savensx', 'nsxController@savensx');
Route::get('/deletensx/{id}', 'nsxController@deletensx');

//daodien
Route::get('/adddaodien', 'daodienController@adddaodien');
Route::get('/alldaodien', 'daodienController@alldaodien');
Route::get('/editdaodien/{id}', 'daodienController@editdaodien');
Route::post('/save_editdaodien/{id}', 'daodienController@save_editdaodien');
Route::post('/savedaodien', 'daodienController@savedaodien');
Route::get('/deletedaodien/{id}', 'daodienController@deletedaodien');

//dienvien
Route::get('/adddienvien', 'dienvienController@adddienvien');
Route::get('/alldienvien', 'dienvienController@alldienvien');
Route::get('/editdienvien/{id}', 'dienvienController@editdienvien');
Route::post('/save_editdienvien/{id}', 'dienvienController@save_editdienvien');
Route::post('/savedienvien', 'dienvienController@savedienvien');
Route::get('/deletedienvien/{id}', 'dienvienController@deletedienvien');
