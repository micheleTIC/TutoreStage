<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table = 'annonces';

    public $timestamps = false;

    public function annoncer(){
        return $this->belongsToMany('App\Secteur');
    }
}