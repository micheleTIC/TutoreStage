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
        $nomFichier = time().'.'.$inputs['fichier']->extension();
        $inputs['fichier']->move(public_path('fichiers'), $nomFichier);
        $this->dossier->titre = $inputs['titre'];
        $this->dossier->lien = $nomFichier;
        $this->dossier->id_stagiaire = $id;

        $this->dossier->save();
    }
}
