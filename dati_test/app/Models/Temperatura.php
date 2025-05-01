<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    protected $table = 'temperaturas';  // opzionale se il nome del modello è plurale corretto

    protected $fillable = [
        'valore',
    ];
}