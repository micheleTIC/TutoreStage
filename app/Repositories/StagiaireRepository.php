<?php

namespace App\Repositories;

use App\Stagiaire;
use Illuminate\Support\Facades\Hash;

class StagiaireRepository implements StagiaireRepositoryInterface
{
    protected $stagiaire;

    public function __construct()
    {
        $this->stagiaire = new Stagiaire;
    }

    public function modifier($id, Array $inputs)
    {
        $stagiaire = Stagiaire::find($id);
        //if(Hash::check($inputs['password'], $stagiaire['password']))
        if($inputs['password'] == $stagiaire['password'])
        {
            session()->put('first_name', $inputs['first_name']);
            session()->put('last_name', $inputs['last_name']);
            session()->put('birthday', $inputs['birthday']);
            session()->put('gender', $inputs['gender']);
            session()->put('email', $inputs['email']);
            session()->put('phone', $inputs['phone']);
            session()->put('username', $inputs['username']);
            if($inputs['new_password'] == "")
            {
                Stagiaire::where('id',$id)->update(['first_name' => $inputs['first_name'], 'last_name' => $inputs['last_name'], 'birthday' => $inputs['birthday'], 'gender' => $inputs['gender'], 'email' => $inputs['email'], 'phone' => $inputs['phone'], 'username' => $inputs['username']]);
            }
            else
            {
                Stagiaire::where('id',$id)->update(['first_name' => $inputs['first_name'], 'last_name' => $inputs['last_name'], 'birthday' => $inputs['birthday'], 'gender' => $inputs['gender'], 'email' => $inputs['email'], 'phone' => $inputs['phone'], 'username' => $inputs['username'], 'password' => $inputs['new_password']]);
            }
        }
        else
        {
            return "mot de passe incorrecte";
        }
    }
}
