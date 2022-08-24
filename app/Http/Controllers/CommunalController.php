<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Secretaire;
use App\Models\Trimestre;
use App\Models\User;
use Illuminate\Http\Request;

class CommunalController extends Controller
{
  

    public function create(){
        return view('gestion.anneesco');
    }
    public function annee(Request $request){
        $request->validate([
            "annee"=>"required" 
        ]);
        Annee::create([
            "annee"=>$request->annee
        ]);
        return back()->with("success","Enregistrer avec succès");
    }

    public function ans(){

        $annees = Annee ::orderBy('annee','asc')->get();
        
        return view('gestion.anneesco',compact('annees'));

        
    }



    public function classe(){
        return view('gestion.classe');
    }

    public function class(Request $request){
        $request->validate([
            "classe"=>"required" 
        ]);
        Classe::create([
            "classe"=>$request->classe
        ]);
        return back()->with("success","Enregistrer avec succès");
    }


    public function clas(){

        $classes = Classe ::orderBy('classe','asc')->get();

        return view('gestion.classe',compact('classes'));
    }



    public function trimestre(){
        return view('gestion.trimestre');
    }


    public function trimest(Request $request){
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


    public function trim(){

        $trimestres = Trimestre ::orderBy('trimestre','asc')->get();

        $annees = Annee ::orderBy('annee','asc')->get();

        return view('gestion.trimestre',compact('trimestres','annees'));
    }

    public function amatiere(){

        
        return view('gestion.amatiere');
    }

    public function amatie(Request $request){
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



    public function ama(){

        $matieres = Matiere ::orderBy('matiere','asc')->get();


        $annees = Annee ::orderBy('annee','asc')->get();


        $classes = Classe ::orderBy('classe','asc')->get();

        
        return view('gestion.amatiere',compact('matieres','annees','classes'));
    }




    
    public function matiere(){


        $annees = Annee ::orderBy('annee','asc')->get();


        $classes = Classe ::orderBy('classe','asc')->get();

        $trimestres = Trimestre ::orderBy('trimestre','asc')->get();

        $matieres = Matiere ::orderBy('matiere','asc')->get();
        
        return view('gestion.matiere',compact('annees','classes','trimestres','matieres'));
    }


    public function secret(){
        return view('secretaire.ajoutsecretaire');
    }







    public function eleve(){
        return view('gestion.ajouteleve');
    }

    public function index(Request $request){
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

    public function ele(){


        $annees = Annee ::orderBy('annee','asc')->get();

        $classes = Classe ::orderBy('classe','asc')->get();
        
        return view('gestion.ajouteleve',compact('annees','classes'));
    }





    public function liste(){

        $eleves = Eleve ::orderBy('nom','asc')->get();

        $annees = Annee ::orderBy('annee','asc')->get();

        $classes = Classe ::orderBy('classe','asc')->get();


        return view('gestion.listee',compact('eleves','annees','classes'));
    }


    public function liste2(){
        return view('gestion.listee');
    }




    public function liste1(){


        return view('secretaire.listes');
    }

    public function listes(){
        $users = User ::orderBy('name','asc')->get();
        return view('secretaire.listes',compact('users'));
    }

   

    public function note(){
        return view('gestion.note');
    }

    
}
