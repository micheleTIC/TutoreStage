<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view ('accueil');
    }
    public function inscription(){
        return view ('inscription');
    }
    public function connexion(){
        return view ('connexion');
    }
    public function recruteur(){
        return view ('recruteur');
    }
    public function stagiaire(){
        return view ('stagiaire');
    }
    public function inscription_stagiaire(){
        return view ('inscription_stagiaire');
    }
    public function inscription_recruteur(){
        return view ('inscription_recruteur');
    }
    public function connexion_stagiaire(){
        return view ('connexion_stagiaire');
    }
    public function connexion_recruteur(){
        return view ('connexion_recruteur');
    }
    public function compte_stagiaire(){
        return view ('compte_stagiaire');
    }
    public function compte_recruteur(){
        return view ('compte_recruteur');
    }
    public function entreprises(){
        return view ('entreprises');
    }
}
