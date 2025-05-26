<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slika',
        'naziv',
        'opis',
        'cena',
        'istaknuto',
    ];
}
