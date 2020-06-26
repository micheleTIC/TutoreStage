<?php

namespace App\Repositories;

use App\PieceJointe;

class PieceJointeRepository implements PieceJointeRepositoryInterface
{
    protected $piece;

    public function __construct()
    {
        $this->piece = new PieceJointe;
    }

    public function enregistrer($demande, $piece)
    {
        $this->piece->id_dossier = $piece;
        $this->piece->id_demande = $demande;

        $this->piece->save();
    }

    public function verification($demande, $piece)
    {
        if($piece != "")
        {
            $this->enregistrer($demande, $piece);
        }
    }

    public function joindre($demande, $piece)
    {
        $this->verification($demande, $piece);
    }
}
