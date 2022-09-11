<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Devoir;
use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Moyennematiere;
use App\Models\Note;
use App\Models\Trimestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoyennematiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::orderBy('matiere','asc')->get();
        $classes = Classe::all();
        $eleves = Eleve::orderBy('nom','asc')->get();
        $notes = Note::all();

        return view('moyenne.matiere.index',compact('matieres','classes','eleves','notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eleve_id = $request->eleve_id;
        $matiere_id = $request->matiere_id;
        $trimestre_id = $request->trimestre_id;
        $moyennematiere = $request->moyennematiere;
        $pondere = $request->pondere;

        for($i=0;$i < count ($eleve_id); $i++){

            $databasave= [
                'eleve_id' =>$eleve_id[$i],
                'matiere_id' =>$matiere_id[$i],
                'trimestre_id' =>$trimestre_id[$i],
                'moyennematiere' =>$moyennematiere[$i],
                'pondere' =>$pondere[$i],
            ];
            DB::table('moyennematieres')->insert($databasave);
        }
        return back()->with("success","Enregistrer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moyennematiere  $moyennematiere
     * @return \Illuminate\Http\Response
     */
    public function show($matiere_id)
    {
        $devoirs = DB::select('SELECT * FROM devoirs WHERE matiere_id=?',[$matiere_id]);
        $notes = Note ::all();
        $matieres = Matiere ::all(); 
        $eleves = Eleve::all(); 
        $trimestres = Trimestre::all();
          
           
            return view('moyenne.matiere.show',compact(['eleves','devoirs','matieres','notes','trimestres'])); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moyennematiere  $moyennematiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Moyennematiere $moyennematiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moyennematiere  $moyennematiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moyennematiere $moyennematiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moyennematiere  $moyennematiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moyennematiere $moyennematiere)
    {
        //
    }
}
