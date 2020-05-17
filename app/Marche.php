<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    protected $fillable = [
        'nom', 'ville', 'description'
    ];
}

