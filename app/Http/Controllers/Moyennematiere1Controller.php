<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Moyennematiere1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $eleve_id)
    {
        $notes = DB::select('SELECT * FROM notes WHERE eleve_id=?',[$eleve_id]);
        $notes = Note::where('eleve_id',$eleve_id)->get();
        $eleves = Eleve::orderBy('nom','asc')->get();
        $somme= 0;
        $moyenne = 0;
        $count = 0;
        $notes = $request->input('note');

        $somme += $notes;
        
       
        for($i=0;$i < count ($eleve_id); $i++){

            foreach ($notes as $note){
                
                $count +=1;
            };
        };
        

        $moyenne = $somme/$count;


        return view('moyenne.matiere.insex.show', compact('eleves','moyennes','matieres'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
