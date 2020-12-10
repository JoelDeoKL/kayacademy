<?php

namespace App\Http\Controllers;

use App\Commentaires;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaires::all();
        return view('adm.pages.examples.commentaire.commentaire', compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commentaires = Commentaires::all();
        return view('adm.pages.examples.commentaire.commentaire', compact('commentaires'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commentaires = Commentaires::create($this->validator());
        return back();
    }

    public function store2(Request $request)
    {
        $commentaires = Commentaires::create($this->validator());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaires $commentaires)
    {
        $id = $commentaires->id;
        $commentaires = Commentaires::where('chapitres_id', '=', $id)->get();
        return view('adm.pages.examples.commentaire.commentaire', compact('commentaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaires $commentaires)
    {
        //
    }

    private function validator()
    {
        return request()->validate([
            'nom_complet' => 'required|min:3',
            'commentaire' => 'required|min:3',
            'chapitres_id' => 'required|integer'
        ]);
    }
}
