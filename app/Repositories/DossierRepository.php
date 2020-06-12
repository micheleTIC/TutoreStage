<?php

namespace App\Repositories;

use App\Dossier;

class DossierRepository implements DossierRepositoryInterface
{
    protected $dossier;

    public function __construct()
    {
        $this->dossier = new Dossier;
    }

    public function ajouter($id, $inputs)
    {
        $this->dossier->titre = $inputs['titre'];
        $this->dossier->lien = $inputs['fichier'];
        $this->dossier->id_stagiaire = $id;

        $this->dossier->save();
    }
}
