<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\anneesco;
use App\Models\Classe;
use Illuminate\Http\Request;

class AnneescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $annees = Annee ::all();
        
        return view("annee.anneesco",compact('annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("annee.anneesco");
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
            "annee"=>"required" 
        ]);
        Annee::create([
            "annee"=>$request->annee
        ]);
        return back()->with("success","Enregistrer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anneesco  $anneesco
     * @return \Illuminate\Http\Response
     */
    public function show(Annee $annee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anneesco  $anneesco
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annee = Annee::find($id);
        
        return view("annee.edit",compact("annee"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anneesco  $anneesco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "annee"=>"required",
    
        ]);
        $annee= Annee::find($id);
        $annee->annee= $request->get('annee');
        $annee->save();

       
        return back()->with("success","annee mise a jour avec succès");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anneesco  $anneesco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annee = Annee::find($id);
        $annee->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
