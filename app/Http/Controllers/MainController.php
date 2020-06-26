<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Dossier;
use App\Annonce;
use App\Recruteur;
use App\Preference;
use App\Stagiaire;
use App\Repositories\DossierRepository;
use App\Repositories\PreferenceRepository;
use App\Repositories\AnnonceRepository;
use App\Repositories\PieceJointeRepository;
use App\Repositories\RecruteurRepository;
use App\Repositories\StagiaireRepository;
use App\Repositories\DemandeRepository;
use App\Http\Requests\EnvoyerDemandeRequest;
use App\Http\Requests\EnvoyerAnnonceRequest;
use App\Http\Requests\modifierCompteStagiaireRequest;
use App\Http\Requests\modifierCompteRecruteurRequest;
use App\Http\Requests\AjouterDossierRequest;
use App\Http\Requests\RechercheRequest;
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
    public function compte_stagiaire(Request $request){
        $requete = Stagiaire::where('id', 1)->get();
        foreach($requete as $utilisateur)
        {
            $request->session()->put('id', 1);
            $request->session()->put('first_name', $utilisateur['first_name']);
            $request->session()->put('last_name', $utilisateur['last_name']);
            $request->session()->put('birthday', $utilisateur['birthday']);
            $request->session()->put('gender', $utilisateur['gender']);
            $request->session()->put('email', $utilisateur['email']);
            $request->session()->put('phone', $utilisateur['phone']);
            $request->session()->put('username', $utilisateur['username']);
        }
        if($request->session()->exists('email'))
        {
            $demandes = Demande::join('recruteurs', 'demandes.id_recruteur', '=', 'recruteurs.id')->select('recruteurs.username', 'demandes.id', 'demandes.statut', 'demandes.type_stage')->where('demandes.id_stagiaire', session()->get('id'))->get();

            $entreprises = Recruteur::all();

            $dossier = Dossier::where('id_stagiaire', session()->get('id'))->get();

            $preferences = Preference::join('recruteurs', 'preferences.id_recruteur', '=', 'recruteurs.id')->select('recruteurs.username', 'preferences.id')->where('preferences.id_stagiaire', session()->get('id'))->get();

            return view('compte_stagiaire')->with(['stagiaire' => $request->session()->all(), 'dossier' => $dossier, 'entreprises' => $entreprises, 'preferences' => $preferences, 'demandes' => $demandes]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function modifierStagiaire()
    {
        return view('modifierStagiaire')->with('stagiaire', session()->all());
    }
    public function modifierCompteStagiaire(modifierCompteStagiaireRequest $request)
    {
        $stagiaire = new StagiaireRepository();

        $message = $stagiaire->modifier(session()->get('id'), $request->all());

        return redirect('compte_stagiaire')->with('message', $message);
    }
    public function supprimerFichier($id)
    {
        Dossier::where('id', $id)->delete();

        return redirect('compte_stagiaire');
    }
    public function ajouterDossier(AjouterDossierRequest $request)
    {
        $dossier = new DossierRepository();

        $dossier->ajouter(session()->get('id'), $request->all());

        return redirect('compte_stagiaire');
    }
    public function viderDossier()
    {
        Dossier::where('id_stagiaire', session()->get('id'))->delete();

        return redirect('compte_stagiaire');
    }
    public function demande()
    {
        $dossier = Dossier::where('id_stagiaire', session()->get('id'))->get();

        $preferences = Preference::join('recruteurs', 'preferences.id_recruteur', '=', 'recruteurs.id')->select('recruteurs.username', 'preferences.id_recruteur')->where('preferences.id_stagiaire', session()->get('id'))->get();

        return view('demande')->with(['entreprises' => $preferences, 'dossier' => $dossier]);
    }
    public function ajouterEntreprise($id)
    {
        $preference = new PreferenceRepository();

        $preference->ajouter(session()->get('id'), $id);

        return redirect('compte_stagiaire');
    }
    public function vueEntreprise()
    {
        if(session()->exists('voirEntreprise'))
        {
            $entreprise = Recruteur::where('id', session()->get('voirEntreprise'))->get();
            $annonces = Annonce::where('id_recruteur', session()->get('voirEntreprise'))->get();
            session()->forget('voirEntreprise');
        }
        else
        {
            return redirect('liste_entreprises');
        }

        return view('voir_entreprise')->with(['entreprise' => $entreprise, 'annonces' => $annonces]);
    }
    public function voirEntreprise($id)
    {
        session()->put('voirEntreprise', $id);
        return redirect('vueEntreprise');
    }
    public function envoyerDemande(EnvoyerDemandeRequest $request)
    {
        $demande = new DemandeRepository();

        $piece1 = new PieceJointeRepository();

        $id = $demande->envoyer(session()->get('id'), $request->all());

        $piece1->joindre($id, $request->input('piece1'));

        if($request->input('piece2') != "")
        {
            $piece2 = new PieceJointeRepository();

            $piece2->joindre($id, $request->input('piece2'));
        }
        if($request->input('piece3') != "")
        {
            $piece3 = new PieceJointeRepository();

            $piece3->joindre($id, $request->input('piece3'));
        }
        if($request->input('piece4') != "")
        {
            $piece4 = new PieceJointeRepository();

            $piece4->joindre($id, $request->input('piece4'));
        }
        if($request->input('piece5') != "")
        {
            $piece5 = new PieceJointeRepository();

            $piece5->joindre($id, $request->input('piece5'));
        }

        return redirect('compte_stagiaire');
    }
    public function annulerDemande($id)
    {
        Demande::where('id', $id)->delete();

        return redirect('compte_stagiaire');
    }
    public function supprimerPreference($id)
    {
        Preference::where('id', $id)->delete();

        return redirect('compte_stagiaire');
    }
    public function listeEntreprises()
    {
        $entreprises = Recruteur::all();

        $preferences = Preference::join('recruteurs', 'preferences.id_recruteur', '=', 'recruteurs.id')->select('recruteurs.username', 'preferences.id')->where('preferences.id_stagiaire', session()->get('id'))->get();

        if(session()->exists('recherche'))
        {
            $recherche = session()->get('recherche');
            session()->forget('recherche');
            return view('liste_entreprises')->with(['entreprises' => $entreprises, 'preferences' => $preferences, 'recherche' => $recherche]);
        }

        return view('liste_entreprises')->with(['entreprises' => $entreprises, 'preferences' => $preferences]);
    }
    public function rechercherEntreprise(RechercheRequest $request)
    {
        $recherche = Recruteur::where('firm_name', $request->input('entreprise'))->get();

        $request->session()->put('recherche', $recherche);

        return redirect('liste_entreprises');
    }
    public function compte_recruteur(Request $request){
        $requete = Recruteur::where('id', 2)->get();
        foreach($requete as $utilisateur)
        {
            $request->session()->put('id', 2);
            $request->session()->put('firm_name', $utilisateur['firm_name']);
            $request->session()->put('email', $utilisateur['email']);
            $request->session()->put('phone', $utilisateur['phone']);
            $request->session()->put('website', $utilisateur['website']);
            $request->session()->put('username', $utilisateur['username']);
        }
        if($request->session()->exists('email'))
        {
            $demandes = Demande::join('stagiaires', 'demandes.id_stagiaire', '=', 'stagiaires.id')->select('stagiaires.first_name', 'stagiaires.last_name', 'demandes.id', 'demandes.type_stage', 'demandes.statut')->where('demandes.id_recruteur', session()->get('id'))->get();

            $annonces = Annonce::where('id_recruteur', session()->get('id'))->get();

            return view('compte_recruteur')->with(['recruteur' => $request->session()->all(), 'annonces' => $annonces, 'demandes' => $demandes]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function modifierRecruteur()
    {
        return view('modifierRecruteur')->with('recruteur', session()->all());
    }
    public function modifierCompteRecruteur(modifierCompteRecruteurRequest $request)
    {
        $recruteur = new RecruteurRepository();

        $message = $recruteur->modifier(session()->get('id'), $request->all());

        return redirect('compte_recruteur')->with('message', $message);
    }
    public function accepterDemande($id)
    {
        Demande::where('id', $id)->update(['statut' => 'acceptée']);

        return redirect('compte_recruteur');
    }
    public function refuserDemande($id)
    {
        Demande::where('id', $id)->update(['statut' => 'refusée']);

        return redirect('compte_recruteur');
    }
    public function affichageDemande()
    {
        if(session()->exists('afficherDemande'))
        {
            $demande = Demande::join('stagiaires', 'stagiaires.id', '=', 'demandes.id_stagiaire')->select('demandes.id', 'demandes.type_stage', 'stagiaires.first_name', 'stagiaires.last_name', 'stagiaires.email', 'stagiaires.phone', 'stagiaires.username', 'stagiaires.gender')->where('demandes.id', session()->get('afficherDemande'))->get();
            $dossier = Dossier::join('pieces_jointes', 'pieces_jointes.id_dossier', '=', 'dossiers.id')->select('dossiers.id', 'dossiers.titre', 'dossiers.lien')->where('id_demande', session()->get('afficherDemande'))->get();
            session()->forget('afficherDemande');
        }
        else
        {
            return redirect('compte_recruteur');
        }

        return view('affichage_demande')->with(['demande' => $demande, 'dossier' => $dossier]);
    }
    public function telechargerPiece($id)
    {
        $lien = Dossier::select('lien')->where('id', $id)->get();

        return response()->download(public_path($lien));
    }
    public function afficherDemande($id)
    {
        session()->put('afficherDemande', $id);
        return redirect('affichageDemande');
    }
    public function demandeVu($id)
    {
        Demande::where('id', $id)->delete();

        return redirect('compte_stagiaire');
    }
    public function annonce()
    {
        return view('annonce');
    }
    public function envoyerAnnonce(EnvoyerAnnonceRequest $request)
    {
        $annonce = new AnnonceRepository();

        $annonce->envoyer(session()->get('id'), $request->all());

        return redirect('compte_recruteur');
    }
    public function supprimerAnnonce($id)
    {
        Annonce::where('id', $id)->delete();

        return redirect('compte_recruteur');
    }
    public function deconnexion()
    {
        session()->flush();
        return redirect('/');
    }
    public function entreprises(){
        return view ('entreprises');
    }
}
