<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras'
    ];
}
