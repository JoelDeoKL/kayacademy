<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Cours;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $cours = Cours::all();
        $categories = Categorie::all();
        return view('welcome', compact('cours', 'categories'));
    }
    public function index()
    {
        $categories = Categorie::all();
        return view('adm.pages.examples.categorie.categorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.pages.examples.categorie.categorieAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Categorie::create($this->validator());
        $this->storeImage($categories);
        
        $cours = Cours::all();

        return view('adm.pages.examples.cours.cours', compact('cours'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        $id = $categorie->id;
        $cours = Cours::where('categorie_id', '=', $id)->get();
        return view('adm.pages.examples.categorie.detailCategorie', compact('categorie', 'cours'));
    }
    public function show2(Categorie $categorie)
    {
        $id = $categorie->id;
        $cours = Cours::where('categorie_id', '=', $id)->get();
        return view('cours.formations', compact('categorie', 'cours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('adm.pages.examples.categorie.editCat', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nom_categorie' => 'required|min:3',
            'description_categorie' => 'required|min:3',
            'etat' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
        $categorie->update($request->all());
        $this->storeImage($categorie);
        $categories = Categorie::all();
        return view('adm.pages.examples.categorie.categorie', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        $categories = Categorie::all();
        return view('adm.pages.examples.categorie.categorie', compact('categories'));
    }

    public function categorie()
    {
        $categories = Categorie::all();
        return view('Cours.categorie', compact('categories'));
    }

    private function validator()
    {
        return request()->validate([
            'nom_categorie' => 'required|min:3',
            'description_categorie' => 'required|min:3',
            'etat' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
    }

    protected function storeImage($categories)
    {
        if(request('image')){
            $categories->update([
                'image' => request('image')->store('images', 'public'),
            ]);
        }
    }
}
