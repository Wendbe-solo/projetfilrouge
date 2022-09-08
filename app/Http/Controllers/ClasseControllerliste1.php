<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ClasseControllerliste1 extends Controller
{
    // public function index(Request $request){
    //     $eleves = DB::table('eleves');

    //     $annees = DB::table('annees')->get();
    //     $classes = DB::table('classes')->get();


    //     if($request->keyword != null){
    //         $eleves = $eleves->orWhere('eleves.nom','like','%'.$request->keyword.'%');

    //         // $eleves = $eleves->orWhere('annees.annee','like','%'.$request->keyword.'%');
    //         // $eleves = $eleves->orWhere('classes.classe','like','%'.$request->keyword.'%');
    //     }

    //     if($request->annee != null){

    //         // $eleves = $eleves->where('eleves.annee_id',$request->annee);
    //          $eleves = $eleves->where('annees.annee',$request->annee);
    //     }
    //     if($request->classe != null){

    //         // $eleves = $eleves->where('eleves.classe_id',$request->classe);
    //          $eleves = $eleves->where('classes.classe',$request->classe);
    //     }

    //     $eleves = $eleves
    //                     ->select('eleves.*','classes.classe as classeName','annees.annee as anneeName')
    //                     ->leftJoin('annees','annee_id','eleves.annee_id')
    //                     ->leftJoin('classes','classe_id','eleves.classe_id')
    //                     ->get();
    //   return view('eleve.classeliste',['eleves'=> $eleves,'annees'=>$annees,'classes'=>$classes]);
    // }

    // public function store(){
    //     $eleves = DB::table('eleves')
    //                 ->leftJoin('annees','annee_id','eleves.annee_id')
    //                 ->get();
    //     dd($eleves);
    // }

    // public function liste(){
    //     $eleves = Eleve ::orderBy('nom','asc')->get();
    //     $annees = Annee ::orderBy('annee','asc')->get();

    //     $classes = Classe ::orderBy('classe','asc')->get();
        
    //     return view('list',compact('eleves','annees','classes'));
    // }


    public function liste()
    {
        $eleves = DB::select('SELECT * FROM eleves');
        $eleves = Eleve::orderBy('nom','asc')->get();
        $classes = Classe::all();
        $annees = Annee::all();

        return view('eleve.classeliste1',compact('eleves'));
    }

    public function delete($id){
        $affected = DB::delete('DELETE FROM eleves WHERE id=? ',[$id]);
        return back()->with("success","Supprimer avec succès");
    }

    public function edit($id)
    {
        $eleves = DB::select('SELECT * FROM eleves WHERE id=?', [$id] );
        $eleves = $eleves[0];
        $classes = Classe::all();
        $annees = Annee::all();
        return view('eleve.edit',compact('eleves','annees','classes'));
    }
    public function update($id){
        $request =  'UPDATE eleves SET  matricule = :matricule,nom= :nom, prenom = :prenom,date_naissance = :date_naissance,lieu= :lieu,sexe = :sexe ,pere = :pere,mere = :mere,numero = :numero,annee_id = :annee_id,classe_id = :classe_id,photo = :photo WHERE id = :id';
        DB::update($request,[
            'id'=>$id,
            'matricule'=>request('matricule'),
            'matricule'=>request('matricule'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'date_naissance'=>request('date_naissance'),
            'lieu'=>request('lieu'),
            'sexe'=>request('sexe'),
            'pere'=>request('pere'),
            'mere'=>request('mere'),
            'numero'=>request('numero'),
            'annee_id'=>request('annee_id'),
            'classe_id'=>request('classe_id'),
            'photo'=>request('photo')

        ]);
        return back()->with("success","modifier avec succès");
    }

    public function show($id)
    {
        $eleves = DB::select('SELECT * FROM eleves WHERE id=?',[$id]);
        $eleves = $eleves[0];
        $classes = Classe::all();
        $annees = Annee::all();
        return view('eleve.show',compact('eleves','annees','classes'));
    }
}
