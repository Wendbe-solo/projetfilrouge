<?php

namespace App\Http\Controllers;


use App\Models\Trimestre;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Elevecontrollers extends Controller
{
   

public function trim(){
    $trimestres = Trimestre::orderBy("trimestre","asc")->get();
    
    return view("gestion.matiere",compact("trimestres"));
}

    

public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'role' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'last_name' => $request->last_name,
        'role' => $request->role,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return back()->with("success","Enregistrer avec succès");
}
}
