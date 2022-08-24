<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Devoir;
use App\Models\Matiere;
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

        
        return view('devoir.devoir',compact('devoirs','matieres','classes'));
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
    public function edit(Devoir $devoir)
    {
        return view("devoir.devoir",compact("devoirs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoir $devoir)
    {
        $request->validate([
            "libele"=>"required",
            "classe_id"=>"required",
            "matiere_id"=>"required"
    
        ]);
        $devoir->update([
            "libele"=>$request->libele,
            "classe_id"=>$request->classe_id,
            "matiere_id"=>$request->matiere_id,

        ]);
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
