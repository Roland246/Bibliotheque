<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Carbon\Carbon;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=' , Session::get('loginId'))->first();
        }

        $class = Classe::orderBy('created_at', 'desc')->get();
        return view('parametrage.classe', compact('class','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parametrage.classe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:classes|max:12',
            'libelle' => 'required',
            'created_at' => Carbon::now()
        ],
        [
            'code.required' => 'Ce champ est requis',
            'libelle.required' => 'Ce champ est requis',
            'code.unique' => 'Ce code est déjà utilisé',
        ]);

        $class = Classe::create($validatedData);
        return redirect('/classes')->with('success', 'Classe créee avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classe::findOrFail($id)->first();

        return view('parametrage.classe', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classe::findOrFail($id)->first();

        return view('parametrage.classe', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code' => 'required|max:12',
            'libelle' => 'required',
        ],
        [
            'code.required' => 'Ce champ est requis',
            'libelle.required' => 'Ce champ est requis',
        ]);

        $item = Classe::find($id);
        $item->code = $request->input('code');
        $item->libelle = $request->input('libelle');

        $item->update();
        // Classe::whereId($id)->update($validatedData);
        return redirect('/classes')->with('vrai', 'Classe mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classe::findOrFail($id);
        $class->delete();

        return redirect('/classes')->with('supprime', 'Classe supprimer avec succèss');
    }
}
