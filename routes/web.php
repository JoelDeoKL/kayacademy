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

//Route::resource('categorie', 'CategorieController')->middleware('auth');

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

Route::get('categorie', 'CategorieController@index')->middleware('auth');
Route::get('categorie/create', 'CategorieController@create')->middleware('auth');
Route::post('categorie', 'CategorieController@store')->middleware('auth');
Route::get('categorie/{categorie}', 'CategorieController@show')->middleware('auth');
Route::get('les_categories', 'CategorieController@categorie')->middleware('auth');
Route::get('categorie/{categorie}', 'CategorieController@show2')->middleware('auth');
Route::get('categorie/{categorie}/edit', 'CategorieController@edit')->middleware('auth');
Route::put('categorie/{categorie}', 'CategorieController@update')->middleware('auth');
Route::delete('categorie/{categorie}', 'CategorieController@destroy')->middleware('auth');

//Route::resource('cours', 'CoursController')->middleware('auth');
Route::get('formations', 'CoursController@index1')->middleware('auth');
Route::get('toutes_formations', 'CoursController@formations')->middleware('auth');
Route::get('mes_cours/{cours}', 'CoursController@show2')->middleware('auth');
Route::get('nos_cours/{cours}', 'CoursController@show3')->middleware('auth');
Route::get('mon_cours/{cours}/edit', 'CoursController@edit')->middleware('auth');
<<<<<<< HEAD
Route::put('_cours/{cours}', 'CoursController@update')->middleware('auth');
Route::delete('_cours/{cours}', 'CoursController@destroy')->middleware('auth');
=======
Route::get('cours', 'CoursController@index')->middleware('auth');
Route::get('cours/create', 'CoursController@create')->middleware('auth');
Route::post('cours', 'CoursController@store')->middleware('auth');
Route::get('cours/{cours}', 'CoursController@show')->middleware('auth');
Route::get('cours/{cours}', 'CoursController@edit')->middleware('auth');
Route::put('cours/{cours}', 'CoursController@update')->middleware('auth');
Route::delete('cours/{cours}', 'CoursController@destroy')->middleware('auth');
>>>>>>> 40e1de02368dc693ae6bff5f8fc8c4a11fbe4020


Route::resource('module', 'ModuleController')->middleware('auth');
Route::get('le_module/{module}', 'ModuleController@show2')->middleware('auth');

Route::get('cours', '');

Route::resource('chapitre', 'ChapitreController')->middleware('auth');
Route::get('le_chapitre/{chapitre}', 'ChapitreController@show2')->middleware('auth');
Route::get('question/{chapitre}', 'ChapitreController@quiz')->middleware('auth');

Route::resource('commentaire', 'CommentairesController')->middleware('auth');

Route::resource('quiz', 'QuizController')->middleware('auth');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
