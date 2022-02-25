<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthentificationController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ],
        [
            'name.required' => 'Ce champ est requis',
            'email.required' => 'Ce champ est requis',
            'password.required' => 'Ce champ est requis',
            'email.email' => 'Entrez une adresse mail valide',
            'email.unique' => 'Cet email est déjà utilisé',
            'password.max' => 'Le mot de passe doit contenir au plus 12 charactères',
            'password.min' => 'Le mot de passe doit contenir au moins 5 charactères'
        ]);
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success','Inscrption effectuée avec succès');
        } else {
            return back()->with('fail','Error');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ],
        [
            'email.required' => 'Ce champ est requis',
            'password.required' => 'Ce champ est requis',
            'email.email' => 'Entrez une adresse mail valide',
            'password.max' => 'Le mot de passe doit contenir au plus 12 charactères',
            'password.min' => 'Le mot de passe doit contenir au moins 5 charactères'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail','Le mot de passe ne correspond pas');
            }
        } else {
            return back()->with('fail','Erreur. Vérifiez vos identifiants puis réessayez');
        }
    }

    public function dashboard(Request $request){

        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=' , Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout() {

        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
