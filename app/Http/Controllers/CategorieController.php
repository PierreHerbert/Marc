<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{


    public function index()
    {
        $categories = Categorie::latest()->paginate(10);

        return view('categorie.index',compact('categories'));
    }


    // retourne la vue pour créer 
    public function create()
    {
        return view('categorie.create');
    }


   // fonction qui enregistre une nouvelle catégorie
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|unique:categorie|max:255',
        ]);

        Categorie::create($validated);



        return redirect()->route('categorie.index')
        ->withSuccess(__('La catégorie à été créé correctement'));
    }



    // retourne la vue d'édition en fonction de l'id
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit', [
            'categorie' => $categorie
        ]);
    }


    // fonction qui met à jour la catégorie
    public function update(Request $request, Categorie $categorie)
    {
        $validated = $request->validate([
            'nom' => 'required|unique:categorie|max:255',
        ]);
        
        $categorie->update($validated);

        return redirect()->route('categorie.index')
            ->withSuccess(__('Categorie updated successfully.'));
    }


    //fonction pour supprimer la catégorie
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categorie.index')
            ->withSuccess(__('Catégorie supprimée.'));
    }
}
