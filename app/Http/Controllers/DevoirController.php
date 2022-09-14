<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Devoir;
use App\Models\Matiere;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class DevoirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devoirs = Devoir ::orderBy('libele','asc')->get();

        $matieres = Matiere ::orderBy('matiere','asc')->get();
        $classes = Classe ::orderBy('classe','asc')->get();

        $trimestres = Trimestre ::orderBy('trimestre','asc')->get();

        
        return view('devoir.devoir',compact('devoirs','matieres','trimestres','classes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devoir.devoir');
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
            "libele"=>"required",
            "matiere_id"=>"required",
            "classe_id"=>"required",
            "trimestre_id"=>"required"
        ]);
        Devoir::create([
            "libele"=>$request->libele,
            "matiere_id"=>$request->matiere_id,
            "classe_id"=>$request->classe_id,
            "trimestre_id"=>$request->trimestre_id,
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
        $devoir = Devoir::find($id);

        $matieres = Matiere ::orderBy('matiere','asc')->get();
        $classes = Classe ::orderBy('classe','asc')->get();

        $trimestres = Trimestre ::orderBy('trimestre','asc')->get();
        
        $classes = Classe::all();
        return view("devoir.edit",compact('devoir','matieres','trimestres','classes'));
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
            "libele"=>"required",
            "matiere_id"=>"required",
            "classe_id"=>"required",
            "trimestre_id"=>"required"
        ]);
        $devoir= Devoir::find($id);
        $devoir->libele= $request->get('libele');
        $devoir->matiere_id= $request->get('matiere_id');
        $devoir->classe_id= $request->get('classe_id');
        $devoir->trimestre_id= $request->get('trimestre_id');
        $devoir->save();
        return back()->with("success","matiere mise a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoir $devoir)
    {
        $devoir->delete();
        return back()->with('succesDelete','Suprimer avec succès');
    }
}
