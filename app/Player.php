<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'nome','cognome','nazione','ruolo'
    ];
}
