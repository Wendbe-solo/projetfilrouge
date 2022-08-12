<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [
        "matricule",
        "nom",
        "prenom",
        "date_naissance",
        "lieu",
        "sexe",
        "pere",
        "mere",
        "numero",
        "annee_id",
        "classe_id",
        "photo",
    ];


    public function Annee()
    {
        return $this->belongsTo(Annee::class, "annee_id");
    }

    public function Classe()
    {
        return $this->belongsTo(Classe::class, "classe_id");

}
}
