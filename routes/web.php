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
Route::post('/modification_stagiaire', 'MainController@modifierCompteStagiaire');
Route::post('/modification_recruteur', 'MainController@modifierCompteRecruteur');
Route::get('/deconnexion', 'MainController@deconnexion');
Route::get('/supprimerFichier/{id}', 'MainController@supprimerFichier');
Route::post('/ajouterDossier', 'MainController@ajouterDossier');
Route::get('/viderDossier', 'MainController@viderDossier');
Route::get('/demande', 'MainController@demande');
Route::get('/ajouterEntreprise/{id}', 'MainController@ajouterEntreprise');
Route::post('/envoyerDemande', 'MainController@envoyerDemande');
Route::get('/annulerDemande/{id}', 'MainController@annulerDemande');
Route::get('/supprimerPreference/{id}', 'MainController@supprimerPreference');
Route::get('/modifier_stagiaire', 'MainController@modifierStagiaire');
Route::get('/modifier_recruteur', 'MainController@modifierRecruteur');
Route::get('/accepterDemande/{id}', 'MainController@accepterDemande');
Route::get('/refuserDemande/{id}', 'MainController@refuserDemande');
Route::get('/demandeVu/{id}', 'MainController@demandeVu');
Route::get('/annonce', 'MainController@annonce');
Route::post('/envoyerAnnonce', 'MainController@envoyerAnnonce');
Route::get('/supprimerAnnonce/{id}', 'MainController@supprimerAnnonce');
Route::post('/authentification_stagiaire', 'StagiairePostController@connect')->name('S_connect');
Route::post('/authentification_recruteur', 'RecruteurPostController@connect')->name('S_connect');
