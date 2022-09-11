<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listes extends Model
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
        "classe_id",
        "photo",
    ];

    public function Classe()
    {
        return $this->belongsTo(Classe::class, "classe_id");

}
}
