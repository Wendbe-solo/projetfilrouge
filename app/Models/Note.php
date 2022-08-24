<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        "eleve_id",
        "devoir_id",
        "note",
    ];

    public function Eleve()
    {
        return $this->belongsTo(Eleve::class, "eleve_id");

}

public function Devoir()
{
    return $this->belongsTo(Devoir::class, "devoir_id");

}

}
