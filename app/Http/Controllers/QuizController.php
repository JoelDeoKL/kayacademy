<?php

namespace App\Http\Controllers;

use App\Questionnaires;
use App\Chapitre;
use Illuminate\Http\Request;

class QuizController extends Controller
{
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
        $chapitres = Chapitre::all();
        return view('adm.pages.examples.chapitre.quizAdd', compact('chapitres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapitres = Chapitre::all();
        $questionnaires = Questionnaires::create($this->validator());
        return view('adm.pages.examples.chapitre.quizAdd', compact('chapitres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    private function validator()
    {
        return request()->validate([
            'question' => 'required|min:3',
            'reponse' => 'required|min:3',
            'rep1' => 'required|min:3',
            'rep2' => 'required|min:3',
            'rep3' => 'required|min:3',
            'rep4' => 'required|min:3',
            'rep5' => 'required|min:3',
            'chapitres_id' => 'required|integer'
        ]);
    }
}
