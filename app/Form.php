<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'nui', 'rccm', 'localisation', 'contact', 'acontact', 'date', 'logo'
    ];

/*
    public function users()
    {
        return $this->belongsTo(User::class);
    }
*/
}
