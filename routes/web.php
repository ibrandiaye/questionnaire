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

Route::get('/', 'ReponseController@create')->name('home');
Route::resource('categorie', 'CategorieController')->middleware('auth');

Route::resource('question', 'QuestionController')->middleware('auth');
Route::resource('personne', 'PersonneController')->middleware('auth');

Route::resource('reponse', 'ReponseController'); //->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/succe', 'HomeController@succe')->name('succe');
