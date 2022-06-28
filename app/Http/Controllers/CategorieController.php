<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::latest()->paginate(10);

        return view('categorie.index',compact('categories'));
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categorie::create($request->only('nom'));

        return redirect()->route('categorie.index')
        ->withSuccess(__('Categorie created successfully.'));
    }



        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit', [
            'categorie' => $categorie
        ]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {

        
        $categorie->update($request->only('nom'));

        return redirect()->route('categorie.index')
            ->withSuccess(__('Categorie updated successfully.'));
    }


    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categorie.index')
            ->withSuccess(__('Catégorie supprimée.'));
    }
}
