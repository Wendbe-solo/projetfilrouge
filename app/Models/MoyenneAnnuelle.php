<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoyenneAnnuelle extends Model
{
    use HasFactory;
    protected $fillable = [
        "eleve_id",
        "annee_id",
        "moyennean",
    ];

  
}
