<?php

namespace App\Http\Controllers;

use App\Reponse;
use App\Repositories\PersonneRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\ReponseRepository;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    protected $reponseRepository;
    protected $questionRepository;
    protected $personneRepository;

    public function __construct(ReponseRepository $reponseRepository,QuestionRepository $questionRepository,
    PersonneRepository $personneRepository)
    {
        $this->reponseRepository= $reponseRepository;
        $this->questionRepository = $questionRepository;
        $this->personneRepository = $personneRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = $this->questionRepository->getAll();
        return view('welcome',compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personne = $this->personneRepository->store($request->only(['nom','prenom','email',])) ;
        $arrlength = count($request['reponses']);
        $reponses = $request['reponse'];
        $reponses = $request['reponses'];
        $questions_id= $request['questions_id'];
        for ($i=0; $i < $arrlength; $i++) {
            $reponse = new Reponse();
            $reponse->reponse = $reponses[$i];
            $reponse->question_id = $questions_id[$i];
            $reponse->personne_id = $personne->id;
            $reponse->save();
        }
        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne = $this->personneRepository->getReponseByPersonne($id);
        return view('personne.show',compact('personne '));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
