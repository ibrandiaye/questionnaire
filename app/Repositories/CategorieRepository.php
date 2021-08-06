<?php

namespace App\Repositories;

use App\Categorie;


class CategorieRepository extends RessourceRepository{
  public function __construct(Categorie $categorie)
  {
      $this->model = $categorie;
  }

  public function getQuestionByCategorie($id){
    return Categorie::with(['questions','questions.petiteQuestions'])
        ->where('id',$id)
        ->get();
  }
}
