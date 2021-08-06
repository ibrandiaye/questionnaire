<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = [
        'nom','prenom','email'
    ];
    public function reponses(){
        return $this->hasMany(Reponse::class);
    }
}
