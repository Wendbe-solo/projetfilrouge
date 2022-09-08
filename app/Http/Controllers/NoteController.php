<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Devoir;
use App\Models\Eleve;
use App\Models\Note;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        // $eleves = Eleve ::where('classe_id',1)->get();

        // $devoirs = Devoir ::where('classe_id',1)->where('libele',1)->get();


        $notes = Note ::all();

        $eleves = Eleve ::orderBy('nom','asc')->get();

        $classes = Classe ::all();

        // $eleves = Eleve ::where('classe_id',2)->get();
        
        return view('note.index',compact('eleves','classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.show');
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
        $devoir_id = $request->devoir_id;
        $note = $request->note;

        for($i=0;$i < count ($eleve_id); $i++){

            $databasave= [
                'eleve_id' =>$eleve_id[$i],
                'devoir_id' =>$devoir_id[$i],
                'note' =>$note[$i],
            ];
            DB::table('notes')->insert($databasave);
        }
        return back()->with("success","Enregistrer avec succès");
        // $request->validate([
        //     "eleve_id"=>"required",
        //     "devoir_id"=>"required",
        //     "note"=>"required",
        // ]);
        // Note::create([
        //     "eleve_id"=>$request->eleve_id,
        //     "devoir_id"=>$request->devoir_id,
        //     "note"=>$request->note,
        // ]);
        // return back()->with("success","Enregistrer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($classe_id)
    {
        $eleves = DB::select('SELECT * FROM eleves WHERE classe_id=?',[$classe_id]);

       $devoirs = Devoir ::where('classe_id',$classe_id)->get();
       
        return view('note.show',compact(['eleves','devoirs']));
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
