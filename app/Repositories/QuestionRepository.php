<?php

namespace App\Repositories;

use App\Question;
use Illuminate\Support\Facades\DB;

class QuestionRepository extends RessourceRepository{
  public function __construct(Question $question)
  {
      $this->model = $question;
  }

  public function getQuestionByCategorie($id){
    return DB::table('questions')
        ->where('categorie_id',$id)
        ->get();
  }
  public function getQuestionAndCategorie($id){
    return Question::with('categorie')
        ->get();
  }
}
