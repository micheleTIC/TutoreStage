<?php

namespace App\Repositories;

use App\Demande;

class DemandeRepository implements DemandeRepositoryInterface
{
    protected $demande;

    public function __construct()
    {
        $this->demande = new Demande;
    }

    public function envoyer($id, Array $inputs)
    {
        $this->demande->type_stage = $inputs['type'];
        $this->demande->statut = "en cours";
        $this->demande->id_stagiaire = $id;
        $this->demande->id_recruteur = $inputs['entreprise'];

        $this->demande->save();

        return $this->demande->id;
    }
}
