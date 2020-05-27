<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Stagiaires;
use Illuminate\Support\Facades\Hash;

class StagiairePostController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'=> 'required',
            'email'=> 'email',
            'password' => 'required',
            'password_confirmation' => 'same:password'
        ]);
        $trainee=new Stagiaires([
            'first_name'=> $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'birthday' =>  $request->get('birthday'),
            'gender' =>  $request->get('gender'),
            'email' =>  $request->get('email'),
            'phone' =>  $request->get('phone'),
            'username' =>  $request->get('username'),
            'password' =>Hash::make($request->get('password')),
        ]);
        $trainee->save();
        return view('connexion_stagiaire');
    }

}
