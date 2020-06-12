<?php

namespace App\Repositories;

use App\Recruteur;
use Illuminate\Support\Facades\Hash;

class RecruteurRepository implements RecruteurRepositoryInterface
{
    protected $recruteur;

    public function __construct()
    {
        $this->recruteur = new Recruteur;
    }

    public function modifier($id, Array $inputs)
    {
        $recruteur = Recruteur::find($id);
        //if(Hash::check($inputs['password'], $stagiaire['password']))
        if($inputs['password'] == $recruteur['password'])
        {
            session()->put('firm_name', $inputs['firm_name']);
            session()->put('email', $inputs['email']);
            session()->put('phone', $inputs['phone']);
            session()->put('website', $inputs['website']);
            session()->put('username', $inputs['username']);
            if($inputs['new_password'] == "")
            {
                Recruteur::where('id',$id)->update(['firm_name' => $inputs['firm_name'], 'email' => $inputs['email'], 'phone' => $inputs['phone'], 'website' => $inputs['website'], 'username' => $inputs['username'],]);
            }
            else
            {
                Recruteur::where('id',$id)->update(['firm_name' => $inputs['firm_name'], 'email' => $inputs['email'], 'phone' => $inputs['phone'], 'website' => $inputs['website'], 'username' => $inputs['username'], 'password' => $inputs['new_password']]);
            }
        }
        else
        {
            return "mot de passe incorrecte";
        }
    }
}
