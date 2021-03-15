<?php

namespace App\Http\Controllers;

use App\Cours;
use App\Categorie;
use App\Module;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $cours = Cours::all();
        return view('cours.formations', compact('cours'));
    }

    public function index()
    {
        // $cours = Cours::etat();
        $categories = Categorie::all();
        $cours = Cours::all();

        return view('adm.pages.examples.cours.cours', compact('cours', 'categories'));
    }

    public function formations()
    {
        // $cours = Cours::etat();
        $cours = Cours::all();
        return view('cours.tFormations', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('adm.pages.examples.cours.coursAdd', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cours = Cours::create($this->validateur());
        $this->storeImage($cours);
        //$cours = Cours::etat();
        $cours = Cours::all();
        $categories = Categorie::all();
        return view('adm.pages.examples.cours.cours', compact('cours', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show2(Cours $cours)
    {
        $id = $cours->id;
        $modules = Module::where('cours_id', '=', $id)->get();
        
        return view('cours/formation', compact('cours', 'modules'));
    }

    public function show3(Cours $cours)
    {
        $id = $cours->id;
        $modules = Module::where('cours_id', '=', $id)->get();
        return view('adm.pages.examples.cours.coursDetail', compact('cours', 'modules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(Cours $cours)
    {
        $categories = Categorie::all();
        return view('adm.pages.examples.cours.editCours', compact('cours','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cours $cours)
    {
        die($cours);
        $request->validate([
            'titre_cours' => 'required|min:3',
            'description' => 'required|min:3',
            'titulaire' => 'required|min:3',
            'niveau' => 'required|min:1',
            'duree' => 'required|min:3',
            'etat' => 'required|integer',
            'categorie_id' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
        $cours->update($request->all());
        $this->storeImage($cours);
        $cours = Cours::all();
        $categories = Categorie::all();
        return view('adm.pages.examples.cours.cours', compact('cours', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cours $cours)
    {
        $cours->delete();
        $cours = Cours::all();
        $categories = Categorie::all();
        return view('adm.pages.examples.cours.cours', compact('cours', 'categories'));
    }

    public function about()
    {
        //
    }

    private function validateur()
    {
        return request()->validate([
            'titre_cours' => 'required|min:3',
            'description' => 'required|min:3',
            'titulaire' => 'required|min:3',
            'niveau' => 'required|min:1',
            'duree' => 'required|min:3',
            'etat' => 'required|integer',
            'categorie_id' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
    }

    protected function storeImage($cours)
    {
        if(request('image')){
            $cours->update([
                'image' => request('image')->store('images', 'public'),
            ]);
        }
    }

    public function recherche(){
        return Cours::all();
    }
}
