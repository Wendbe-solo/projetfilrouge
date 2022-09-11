<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe ::orderBy('classe','asc')->get();

        $annees = Annee ::orderBy('annee','asc')->get();

        return view('classe.classe',compact('classes','annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classe.classe');
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
            "classe"=>"required",
            "annee_id"=>"required" 
        ]);
        Classe::create([
            "classe"=>$request->classe,
            "annee_id"=>$request->annee_id
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
    public function edit($id)
    {
        $classe = Classe::find($id);
        $annees = Annee::all();
        return view("classe.edit",compact("classe","annees"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            "classe"=>"required",
            "annee_id"=>"required",
    
        ]);
        $classe= Classe::find($id);
        $classe->classe= $request->get('classe');
        $classe->annee= $request->get('annee_id');
        $classe->save();
        return back()->with("success","annee mise a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
