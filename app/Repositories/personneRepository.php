<?php

namespace App\Repositories;

use App\Personne;
use Illuminate\Support\Facades\DB;

class PersonneRepository extends RessourceRepository{
  public function __construct(Personne $personne)
  {
      $this->model = $personne;
  }
  public function getReponseByPersonne($id){
      return Personne::with(['reponses','reponses.question'])
      ->where('id',$id)
      ->first();

  }
  public function getReponsewithCategorie($id){
          return DB::table('reponses')
          ->join('questions','reponses.question_id','=','questions.id')
          ->join('categories','questions.categorie_id','=','categories.id')
          ->where('reponses.personne_id',$id)
          ->select('categories.nomc', DB::raw('sum(reponses.reponse) as somme'))
          ->groupBy('categories.nomc')
          ->get();

}
}
