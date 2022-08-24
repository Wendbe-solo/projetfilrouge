<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere ::orderBy('matiere','asc')->get();


        $annees = Annee ::orderBy('annee','asc')->get();


        $classes = Classe ::orderBy('classe','asc')->get();

        
        return view('matiere.matiere',compact('matieres','annees','classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matiere.matiere');
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
            "matiere"=>"required",
            "coeficient"=>"required",
            "annee_id"=>"required",
            "classe_id"=>"required" 
        ]);
        Matiere::create([
            "matiere"=>$request->matiere,
            "coeficient"=>$request->coeficient,
            "annee_id"=>$request->annee_id,
            "classe_id"=>$request->classe_id
        ]);
        return back()->with("success","Enregistrer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        return view("matiere.matiere",compact("matieres"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Matiere $matiere)
    {
        $request->validate([
            "matiere"=>"required",
            "coeficient"=>"required",
            "annee_id"=>"required",
            "classe_id"=>"required" 
    
        ]);
        $matiere->update([
            "matiere"=>$request->matiere,
            "coeficient"=>$request->coeficient,
            "annee_id"=>$request->annee_id,
            "classe_id"=>$request->classe_id

        ]);
        return back()->with("success","matiere mise a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
