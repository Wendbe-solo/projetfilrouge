<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;

class ListeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $classPk = 2;

        // $eleves = Eleve ::where('classe_id',$classPk)->get();

        

        // $classes = Classe ::orderBy('classe','asc')->get();
        // $annees = Annee ::orderBy('annee','asc')->get();

        // $annee_id = Annee::orderBy('id', 'desc')->first()->id;
        // $classe_id = Classe::orderBy('id', 'desc')->first()->id;

        // $eleves = Eleve :: where('classe_id',$classe_id)->where('annee_id',$annee_id)->get();
       

        // $eleves = Eleve ::orderBy('nom','asc')->get();
        // return view('eleve.listee',compact('eleves','annees','classes'));


        $classes = Classe ::orderBy('classe','asc')->get();
        $annees = Annee ::orderBy('annee','asc')->get();


        $annee_id = $request->annee_id;
        $classe_id = $request->classe_id;

        $eleves = Eleve :: where('classe_id',$classe_id)->where('annee_id',$annee_id)->get();
       

        // $eleves = Eleve ::orderBy('nom','asc')->get();
        
        return view('eleve.listee',compact('eleves','annees','classes'));
    }

    public function wise(Request $request){

       
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eleve.listee');
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
            "annee_id"=>"required",
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
            "annee_id"=>$request->annee_id,
            "classe_id"=>$request->classe_id,
            "photo"=>$request->photo
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
    public function edit(Eleve $elev)
    {
        return view("eleve.listee",compact("eleves"));
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
            "annee_id"=>"required",
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
            "annee_id"=>$request->annee_id,
            "classe_id"=>$request->classe_id,
            "photo"=>$request->photo

        ]);
        return back()->with("success","annee mise a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
