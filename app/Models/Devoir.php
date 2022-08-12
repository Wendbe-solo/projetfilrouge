<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    use HasFactory;
    protected $fillable = [
        "libele",
        "classe_id",
        "matiere_id",
    ];

    public function Matiere()
    {
        return $this->belongsTo(Matiere::class, "matiere_id");
    }

    public function Classe()
    {
        return $this->belongsTo(Classe::class, "classe_id");
    }

}
