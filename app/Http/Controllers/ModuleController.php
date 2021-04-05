<?php

namespace App\Http\Controllers;

use App\Module;
use App\Cours;
use App\Chapitre;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('adm.pages.examples.module.module', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cours::all();
        return view('adm.pages.examples.module.modAdd', compact('cours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modules = Module::create($this->validator());
        $this->storeImage($modules);
        $modules = Module::all();
        return view('adm.pages.examples.module.module', compact('modules'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $id = $module->id;
        $chapitres = Chapitre::where('modules_id', '=', $id)->get();
        return view('adm.pages.examples.chapitre.chapitre', compact('module', 'chapitres'));
    }

    public function show2(Module $module)
    {
        $id = $module->id;
        $chapitres = Chapitre::where('modules_id', '=', $id)->get();
        return view('cours/chapitre', compact('module', 'chapitres'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $cours = Cours::all();
        return view('adm.pages.examples.module.editModule', compact('cours','module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'titre_module' => 'required|min:3',
            'description_module' => 'required|min:3',
            'etat' => 'required|integer',
            'cours_id' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);

        $module->update($request->all());
        $this->storeImage($module);
        $cours = Cours::all();
        $modules = Module::all();
        return view('adm.pages.examples.module.module', compact('cours', 'modules'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
    private function validator()
    {
        return request()->validate([
            'titre_module' => 'required|min:3',
            'description_module' => 'required|min:3',
            'etat' => 'required|integer',
            'cours_id' => 'required|integer',
            'image' => 'sometimes|image|max:5000'
        ]);
    }

    protected function storeImage($modules)
    {
        if(request('image')){
            $modules->update([
                'image' => request('image')->store('images', 'public'),
            ]);
        }
    }
}
