<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Devoir;
use App\Models\Matiere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControllers extends Controller
{
    public function index(){


        // $users = User::where('id','!=',Auth::user()->id)->get();

        $users= User::orderBy("name","asc")->get();
        
        return view("gestion.listes",compact("users"));

    }


    public function devoir(){

        return view('gestion.devoir');
    }

    public function devo(Request $request){
        $request->validate([
            "libele"=>"required",
            "classe_id"=>"required",
            "matiere_id"=>"required"
        ]);
        Devoir::create([
            "libele"=>$request->libele,
            "classe_id"=>$request->classe_id,
            "matiere_id"=>$request->matiere_id,
        ]);
        return back()->with("success","Enregistrer avec succès");
    }

    public function deve(){

        $devoirs = Devoir ::orderBy('libele','asc')->get();

        $matieres = Matiere ::orderBy('matiere','asc')->get();

        $classes = Classe ::orderBy('classe','asc')->get();

        
        return view('gestion.devoir',compact('devoirs','matieres','classes'));
    }
}
