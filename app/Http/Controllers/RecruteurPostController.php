<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Recruteurs;
use Illuminate\Support\Facades\Hash;

class RecruteurPostController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'firm_name'=> 'required',
            'email'=> 'email',
            'password' => 'required',
            'password_confirmation' => 'same:password'
        ]);
        $firm=new Recruteurs([
            'firm_name'=>  $request->get('firm_name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'website'=>$request->get('website'),
            'username'=>$request->get('username'),
            'password'=> Hash::make($request->get('password')),
        ]);
        $firm->save();
        return view('connexion_recruteur');
    }

    public function connect(Request $request)
    {
      $this->validate($request, [
          'username'=> 'required',
          'password' => 'required'
      ]);
      $post = Recruteurs::where('username',$request->get('username'))->first();

      if(isset($post)){

         if(Hash::check($request->get('password'),$post->password)){
           return redirect()->route('Account_Trainee');
         }else{
           return back()->with(['erreur'=>'Mot de passe erronné'])->withInput();
         }
      }else{
           return back()->with(['erreur'=>'Compte introuvable'])->withInput();
      }
    }

}
