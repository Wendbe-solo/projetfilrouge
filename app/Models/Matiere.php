<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        "matiere",
        "coeficient",
        "annee_id",
        "classe_id",
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
