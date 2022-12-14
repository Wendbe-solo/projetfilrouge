<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve ::orderBy('nom','asc')->get();
        $annees = Annee ::orderBy('annee','asc')->get();

        $classes = Classe ::orderBy('classe','asc')->get();
        
        return view('eleve.create',compact('eleves','annees','classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eleve = Eleve ::orderBy('nom','asc')->get();
        $classes = Classe ::orderBy('classe','asc')->get();
        return view('eleve.create',compact('eleve','classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "matricule"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "date_naissance"=>"required",
            "lieu"=>"required",
            "sexe"=>"required",
            "pere"=>"required",
            "mere"=>"required",
            "numero"=>"required",
            "classe_id"=>"required",
            "photo"=>"required"
        ]);
        Eleve::create([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "date_naissance"=>$request->date_naissance,
            "lieu"=>$request->lieu,
            "sexe"=>$request->sexe,
            "pere"=>$request->pere,
            "mere"=>$request->mere,
            "numero"=>$request->numero,
            "classe_id"=>$request->classe_id,
            "photo"=>$request->photo
        ]);
        return back()->with("success","Enregistrer avec succ??s");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        $eleves = Eleve ::orderBy('nom','asc')->get();
        $annees = Annee ::orderBy('annee','asc')->get();
        $classes = Classe ::orderBy('classe','asc')->get();
        return view('eleve.carte',compact('eleves','classes','annees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("eleve.edit",compact("eleve"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            "matricule"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "date_naissance"=>"required",
            "lieu"=>"required",
            "sexe"=>"required",
            "pere"=>"required",
            "mere"=>"required",
            "numero"=>"required",
            "classe_id"=>"required",
            "photo"=>"required"
    
        ]);
        $eleve->update([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "date_naissance"=>$request->date_naissance,
            "lieu"=>$request->lieu,
            "sexe"=>$request->sexe,
            "pere"=>$request->pere,
            "mere"=>$request->mere,
            "numero"=>$request->numero,
            "classe_id"=>$request->classe_id,
            "photo"=>$request->photo

        ]);
        return back()->with("success","annee mise a jour avec succ??s");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        Storage::delete($eleve->photo);
        $eleve->delete();
        return back()->with('succesDelete','Suprimer avec succ??s');
    }
}
