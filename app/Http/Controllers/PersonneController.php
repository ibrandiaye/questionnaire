<?php

namespace App\Http\Controllers;

use App\Repositories\PersonneRepository;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    protected $personneRepository;

    public function __construct(PersonneRepository $personneRepository){
        $this->personneRepository =$personneRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = $this->personneRepository->getAll();
        return view('personne.index',compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $stats = $this->personneRepository->getReponsewithCategorie($id);
        $somme = 0;
        $tab = array();
        foreach ($stats as $key => $value) {
            $somme = $somme +$value->somme;
          }
         // dd($somme);
         foreach ($stats as $key => $value) {
           $value->pourcentage = round($value->somme*100/$somme);
           $tab []=  $value;
         }
       //  dd($tab);

        return view('personne.show',compact('personne','tab'));
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
