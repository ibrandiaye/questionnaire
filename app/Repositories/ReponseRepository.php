<?php

namespace App\Repositories;

use App\Reponse;
use Illuminate\Support\Facades\DB;

class ReponseRepository extends RessourceRepository{
  public function __construct(Reponse $reponse)
  {
      $this->model = $reponse;
  }

  public function getQuestionByCategorie($id){
    return DB::table('questions')
        ->where('categorie_id',$id)
        ->get();
  }
}
