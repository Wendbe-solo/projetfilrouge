<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moyennematiere extends Model
{
    use HasFactory;
    protected $fillable = [
        "eleve_id",
        "matiere_id",
        "trimestre_id",
        "moyennematiere",
        "pondere",
    ];

    public function Eleve()
    {
        return $this->belongsTo(Eleve::class, "eleve_id");

}

public function Trimestre()
{
    return $this->belongsTo(Trimestre::class, "trimestre_id");

}

public function Matiere()
{
    return $this->belongsTo(Matiere::class, "matiere_id");
}
}
