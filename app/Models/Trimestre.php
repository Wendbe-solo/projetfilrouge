<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;
    protected $fillable = [
        "trimestre",
        "annee_id",
    ];
    public function Annee()
    {
        return $this->belongsTo(Annee::class, "annee_id");
    }
}
