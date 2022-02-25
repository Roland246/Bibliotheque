<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classe;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
        $data['created_at'] = Carbon::now();
        DB::table('classes')->insert($data);

        return back()->with('success','OK');

    }

    public function touteClasse(){
        $categories = DB::table('classes')->latest()->get();
        return view('parametrage.classe',compact('categories'));
    }

    public function Find($id){
        $categories = DB::table('classes')->where('id',$id)->first();
        return view('parametrage.classe',compact('categories'));
    }

    public function Edit($id){
        $categories = Classe::find($id);
        return view('parametrage.classe',compact('categories'));
    }

    public function Delete($id){
        $delete = Classe::where('id',$id)->delete();
        return redirect()->back()->with('vrai','supression ok!');
    }

}
