<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;




class CompositionController extends Controller
{
    function index(){
        // $classes = DB::table('classes')->groupBy('classes')->get();
        $classes = Classe ::orderBy('classe','asc')->get();

        return view('devoir.composition',compact('classes'));
        // return view('devoir.composition')->with('classes',$classes);
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');

        $value = $request->get('value');
        
        $dependent = $request->get('dependent');

        $data = DB::table('classes')->where($select,$value)
                                    ->groupBy($dependent)->get();

        $output = '<select value=""> Select '.ucfirst($dependent).'</option>';

        foreach($data as $row){
            $output = '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }
}
