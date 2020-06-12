<?php

namespace App\Repositories;

use App\Annonce;

class AnnonceRepository implements AnnonceRepositoryInterface
{
    protected $annonce;

    public function __construct()
    {
        $this->annonce = new Annonce;
    }

    public function envoyer($id, Array $inputs)
    {
        $this->annonce->titre = $inputs['titre'];
        $this->annonce->contenu = $inputs['contenu'];
        $this->annonce->id_recruteur = $id;

        $this->annonce->save();
    }
}
