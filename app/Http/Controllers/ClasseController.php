<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classe;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ClasseController extends Controller
{

    public function getClasse(){
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=' , Session::get('loginId'))->first();
        }
        return view('parametrage.classe', compact('data'));
    }

    public function AjouterClasse(Request $request){
        $request->validate([
            'code' => 'required|unique:classes|max:12',
            'libelle' => 'required',
        ],
        [
            'code.required' => 'Ce champ est requis',
            'libelle.required' => 'Ce champ est requis',
            'code.unique' => 'Ce code est déjà utilisé',
        ]);

        $data = array();
        $data['code'] = $request->code;
        $data['libelle'] = $request->libelle;
        DB::table('classes')->insert($data);

        return back()->with('success','OK');

    }

    public function TouteClasse(Request $request){
        $categories = DB::table('classes')->latest()->get();
        return dd($categories);
        return view('parametrage.classe', compact('categories'));
    }

}
