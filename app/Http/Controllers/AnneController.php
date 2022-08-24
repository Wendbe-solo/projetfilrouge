<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AnneController extends Controller
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

    public function delete(Annee $annee){
        $annee->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }

    public function update(Request $request, Annee $annee){

        $request->validate([
            "annee"=>"required",
    
        ]);
        $annee->update([
            "annee"=>$request->annee

        ]);
        return back()->with("success","annee mise a jour avec succès");
    }
}
