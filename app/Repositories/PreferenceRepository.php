<?php

namespace App\Repositories;

use App\Preference;

class PreferenceRepository implements PreferenceRepositoryInterface
{
    protected $preference;

    public function __construct()
    {
        $this->preference = new Preference();
    }

    public function ajouter($stagiaire, $recruteur)
    {
        $this->preference->id_stagiaire = $stagiaire;
        $this->preference->id_recruteur = $recruteur;

        $this->preference->save();
    }
}
