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

    public function connect(Request $request)
    {
      $this->validate($request, [
          'username'=> 'required',
          'password' => 'required'
      ]);
      $post = Stagiaires::where('username',$request->get('username'))->first();

      if(isset($post)){
         if(Hash::check($request->get('password'),$post->password)){
          
              $request->session()->put('id', 2);
              $request->session()->put('first_name', $post['first_name']);
              $request->session()->put('last_name', $post['last_name']);
              $request->session()->put('birthday', $post['birthday']);
              $request->session()->put('gender', $post['gender']);
              $request->session()->put('email', $post['email']);
              $request->session()->put('phone', $post['phone']);
              $request->session()->put('username', $post['username']);
           return redirect()->route('Account_Trainee')->with('stagiaire', $request->session()->all());
         }else{
           return back()->with(['erreur'=>'Mot de passe erronné'])->withInput();
         }
      }else{
           return back()->with(['erreur'=>'Compte introuvable'])->withInput();
      }
    }

}
