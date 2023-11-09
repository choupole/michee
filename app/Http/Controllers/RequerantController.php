<?php

namespace App\Http\Controllers;

use App\Models\Requerant;
use Illuminate\Http\Request;

class RequerantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les requérants dans la base de données
        $requerants = Requerant::all();

        // Retourner la vue avec les données des requérants
        return view('requerants.index', compact('requerants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'un nouveau requérant
        return view('requerants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DateCreat' => 'required',
            'PhotoProfil' => 'required',
        ]);

        // Créer un nouveau requérant avec les données validées
        $requerant = Requerant::create($validatedData);

        // Rediriger vers la page de détails du requérant nouvellement créé
        return redirect()->route('requerants.show', compact('requerant'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer le requérant spécifié dans la base de données
        $requerant = Requerant::findOrFail($id);

        // Retourner la vue avec les données du requérant
        return view('requerants.show', compact('requerant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer le requérant spécifié dans la base de données
        $requerant = Requerant::findOrFail($id);

        // Afficher le formulaire d'édition du requérant
        return view('requerants.edit', compact('requerant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer le requérant spécifié dans la base de données
        $requerant = Requerant::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DateCreat' => 'required',
            'PhotoProfil' => 'required',
        ]);

        // Mettre à jour les attributs du requérant avec les données validées
        $requerant->update($validatedData);

        // Rediriger vers la page de détails du requérant mis à jour
        return redirect()->route('requerants.show', compact('requerant'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le requérant spécifié dans la base de données
        $requerant = Requerant::findOrFail($id);

        // Supprimer le requérant de la base de données
        $requerant->delete();

        // Rediriger vers la liste des requérants
        return redirect()->route('requerants.index');
    }
}
