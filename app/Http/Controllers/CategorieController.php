<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les catégories dans la base de données
        $categories = Categorie::all();

        // Retourner la vue avec les données des catégories
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'une nouvelle catégorie
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $LibCat = $request->input('LibCat');
        // Valider les données si nécessaire
        // ...

        // Enregistrer l'categorie dans la base de données
        $categorie = new Categorie();
        $categorie->Libcat = $LibCat;
        $categorie->save();

        return redirect()->route('categories.index')
                        ->with('success', 'la categorie est créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer la catégorie spécifiée dans la base de données
        $categories = Categorie::findOrFail($id);

        // Retourner la vue avec les données de la catégorie
        return view('admin.categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer la catégorie spécifiée dans la base de données
        $categorie = Categorie::findOrFail($id);

        // Afficher le formulaire d'édition de la catégorie
        return view('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $CodCat)
    {
        // Récupérer la catégorie spécifiée dans la base de données
        $categories = Categorie::findOrFail($CodCat);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'LibCat' => 'required',
            // Ajoutez ici d'autres règles de validation si nécessaire
        ]);

        // Mettre à jour les attributs de la catégorie avec les données validées
        $categories->update($validatedData);

        // Rediriger vers la page de détails de la catégorie mise à jour
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la catégorie spécifiée dans la base de données
        $categorie = Categorie::findOrFail($id);

        // Supprimer la catégorie de la base de données
        $categorie->delete();

        // Rediriger vers la liste des catégories
        return redirect()->route('categories.index');
    }
}
