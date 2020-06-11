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

Route::get('/', 'MainController@index')->name('Home');
Route::get('/recruteur', 'MainController@recruteur')->name('Recruting');
Route::get('/stagiaire', 'MainController@stagiaire')->name('Stagiaires');
Route::get('/inscription_stagiaire', 'MainController@inscription_stagiaire')->name('SignUp_trainee');
Route::get('/inscription_recruteur', 'MainController@inscription_recruteur')->name('SignUp_recruting');
Route::get('/connexion_stagiaire', 'MainController@connexion_stagiaire')->name('SignIn_trainee');
Route::get('/connexion_recruteur', 'MainController@connexion_recruteur')->name('SignIn_recruting');
Route::get('/compte_stagiaire', 'MainController@compte_stagiaire')->name('Account_Trainee');
Route::get('/compte_recruteur', 'MainController@compte_recruteur')->name('Account_Recruting');
Route::get('/entreprises', 'MainController@entreprises')->name('Recruteurs');

Route::post('/connexion_stagiaire', 'StagiairePostController@store');
Route::post('/connexion_recruteur', 'RecruteurPostController@store');

Route::post('/authentification_stagiaire', 'StagiairePostController@connect')->name('S_connect');
Route::post('/authentification_recruteur', 'RecruteurPostController@connect')->name('R_connect');
