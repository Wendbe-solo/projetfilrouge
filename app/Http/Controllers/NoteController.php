<?php

namespace App\Http\Controllers;

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
        $notes = Note ::all();

        $eleves = Eleve ::orderBy('nom','asc')->get();

        $devoirs = Devoir ::orderBy('libele','asc')->get();
        
        return view('note.note',compact('notes','eleves','devoirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.note');
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

        for($i=0;$i<count($eleve_id); $i++){

            $databasave= [
                'eleve_id' =>$eleve_id,
                'devoir_id' =>$devoir_id,
                'note' =>$note,
            ];
            DB::table('notes')->insert($databasave);
        }
        Session::put('success',"Save Data Successfully !");
        return back();
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
