<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    use HasFactory;
    protected $fillable = [
        "libele",
        "matiere_id",
        "classe_id",
        "trimestre_id",
    ];

    public function Matiere()
    {
        return $this->belongsTo(Matiere::class, "matiere_id");
    }
    public function Classe()
    {
        return $this->belongsTo(Classe::class, "classe_id");
    }


    public function Trimestre()
    {
        return $this->belongsTo(Trimestre::class, "trimestre_id");
    }

}
