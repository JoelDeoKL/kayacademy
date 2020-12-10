<?php

namespace App\Http\Controllers;

use App\Chapitre;
use App\Module;
use App\Commentaires;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapitres = Chapitre::all();
        return view('adm.pages.examples.chapitre.chapitre', compact('chapitres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Première fonction create pour enregistrer un chapitre
     */
    public function create()
    {
        $modules = Module::all();
        return view('adm.pages.examples.chapitre.chapAdd', compact('modules'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapitres = Chapitre::create($this->validator());
        $this->storeImage($chapitres);
        $chapitres = Chapitre::all();
        return view('adm.pages.examples.chapitre.chapitre', compact('chapitres'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */

    public function show(Chapitre $chapitre)
    {
        $id = $chapitre->id;
        $chapitres = Chapitre::where('id', '=', $id)->get();  
        return view('adm.pages.examples.chapitre.chpDetail', compact('chapitres'));
    }

    public function show2(Chapitre $chapitre)
    {
        $id = $chapitre->id;
        $chapitres = Chapitre::where('id', '=', $id)->get();
        $commentaires = Commentaires::where('chapitres_id', '=', $id)->get();
        return view('cours/videos', compact('chapitres', 'commentaires'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapitre $chapitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapitre $chapitre)
    {
        $chapitres = update($this->validator());
        $this->storeImage($chapitres);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapitre $chapitre)
    {
        //
    }

    private function validator()
    {
        return request()->validate([
            'titre_chapitre' => 'required|min:3',
            'description_chapitre' => 'required|min:3',
            'videos' => 'required|min:3',
            'texte' => 'required|min:3',
            'modules_id' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
    }


    protected function storeImage($chapitres)
    {
        if(request('image')){
            $chapitres->update([
                'image' => request('image')->store('images', 'public'),
            ]);
        }
    }
}
