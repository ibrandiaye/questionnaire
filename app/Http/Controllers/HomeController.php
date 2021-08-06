<?php

namespace App\Http\Controllers;

use App\Repositories\PersonneRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $personneRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PersonneRepository $personneRepository)
    {
        $this->middleware('auth');
        $this->personneRepository =$personneRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personnes = $this->personneRepository->getAll();
        return view('personne.index',compact('personnes'));
        return view('home',compact('personnes'));
    }
    public function succe(){
        return view('success');
    }
}
