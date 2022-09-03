<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ClasseControllerliste1 extends Controller
{
    public function index(Request $request){
        $eleves = DB::table('eleves');

        $annees = DB::table('annees')->get();
        $classes = DB::table('classes')->get();


        if($request->keyword != null){
            $eleves = $eleves->orWhere('eleves.nom','like','%'.$request->keyword.'%');

            // $eleves = $eleves->orWhere('annees.annee','like','%'.$request->keyword.'%');
            // $eleves = $eleves->orWhere('classes.classe','like','%'.$request->keyword.'%');
        }

        if($request->annee != null){

            // $eleves = $eleves->where('eleves.annee_id',$request->annee);
             $eleves = $eleves->where('annees.annee',$request->annee);
        }
        if($request->classe != null){

            // $eleves = $eleves->where('eleves.classe_id',$request->classe);
             $eleves = $eleves->where('classes.classe',$request->classe);
        }

        $eleves = $eleves
                        ->select('eleves.*','classes.classe as classeName','annees.annee as anneeName')
                        ->leftJoin('annees','annee_id','eleves.annee_id')
                        ->leftJoin('classes','classe_id','eleves.classe_id')
                        ->get();
      return view('eleve.classeliste',['eleves'=> $eleves,'annees'=>$annees,'classes'=>$classes]);
    }

    public function store(){
        $eleves = DB::table('eleves')
                    ->leftJoin('annees','annee_id','eleves.annee_id')
                    ->get();
        dd($eleves);
    }

    public function liste(){
        $eleves = Eleve ::orderBy('nom','asc')->get();
        $annees = Annee ::orderBy('annee','asc')->get();

        $classes = Classe ::orderBy('classe','asc')->get();
        
        return view('list',compact('eleves','annees','classes'));
    }
}
