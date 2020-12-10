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
Route::get('/', 'CategorieController@index1');

Route::resource('categorie', 'CategorieController')->middleware('auth');
Route::get('cat', 'CategorieController@categorie')->middleware('auth');
Route::get('cat/{categorie}', 'CategorieController@show2')->middleware('auth');

Route::view('about', '/cours/about');
Route::view('certification', '/cours/certification');
Route::view('condition', '/cours/condition');
Route::view('contact', '/cours/contact');
Route::view('formation', '/cours/formation')->middleware('auth');
Route::view('module', '/cours/module')->middleware('auth');
Route::view('partie', '/cours/partie')->middleware('auth');
Route::view('quide', '/cours/quide');
Route::view('team', '/cours/team');
Route::view('utilisation', '/cours/utilisation');
Route::view('videos', '/cours/videos')->middleware('auth');

Route::view('accueil', '/adm/pages/examples/accueil');

Route::resource('cours', 'CoursController')->middleware('auth');
Route::get('formations', 'CoursController@index1')->middleware('auth');
Route::get('toutes_formations', 'CoursController@formations')->middleware('auth');
Route::get('cours2/{cours}', 'CoursController@show2')->middleware('auth');

Route::resource('module', 'ModuleController')->middleware('auth');
Route::get('module2/{module}', 'ModuleController@show2')->middleware('auth');

Route::resource('chapitre', 'ChapitreController')->middleware('auth');
Route::get('chapitre2/{chapitre}', 'ChapitreController@show2')->middleware('auth');

Route::resource('commentaire', 'CommentairesController')->middleware('auth');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
