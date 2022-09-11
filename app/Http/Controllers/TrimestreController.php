<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class TrimestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trimestres = Trimestre ::orderBy('trimestre','asc')->get();

        $annees = Annee ::orderBy('annee','asc')->get();

        return view('trimestre.trimestre',compact('trimestres','annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trimestre.trimestre');
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
            "trimestre"=>"required",
            "annee_id"=>"required"
        ]);
        Trimestre::create([
            "trimestre"=>$request->trimestre,
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
        $trimestre = Trimestre::find($id);
        $annees = Annee::all();
        return view("trimestre.edit",compact("trimestre","annees"));
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
            "trimestre"=>"required",
            "annee_id"=>"required"
    
        ]);
        $trimestre= Trimestre::find($id);
        $trimestre->trimestre= $request->get('trimestre');
        $trimestre->annee_id= $request->get('annee_id');
        $trimestre->save();
        return back()->with("success","matiere mise a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trimestre $trimestre)
    {
        $trimestre->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
