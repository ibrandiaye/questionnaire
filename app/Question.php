<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'intitule','categorie_id'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function responses(){
        return $this->hasMany(Reponse::class);
    }
}
