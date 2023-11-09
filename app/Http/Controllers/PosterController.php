<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use App\Models\Propriete;
use App\Models\Responsable;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les posters dans la base de données
        $posters = Poster::all();

        // Retourner la vue avec les données des posters
        return view('admin.posters.index', compact('posters'));
    }

    public function create()
    {
        $responsables = Responsable::all();
        $responsable = Responsable::all();

        // Afficher le formulaire de création d'un nouveau poster
        return view('admin.posters.create', compact('responsables', 'responsable'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $DatePoste = $request->input('DatePoste');
        $Emplacement = $request->input('Emplacement');
        $Caracteristiques = $request->input('Caracteristiques');
        $Details = $request->input('Details');
        $NumProp = $request->input('NumProp');
        $IdResp = $request->input('IdResp');

        // Créer et enregistrer l'utilisateur

        $user = new Poster();
        $user->DatePoste = $DatePoste;
        $user->Emplacement = $Emplacement;
        $user->Caracteristiques = $Caracteristiques;
        $user->Details = $Details;
        $user->NumProp = $NumProp;
        $user->IdResp = $IdResp;
        $user->save();

        $responsables = Responsable::all();
        $proprietes = Propriete::all();
        $posters = $user;

        // Rediriger vers la page de détails du poster nouvellement créé
        return redirect()->route('posters.index', compact('posters', 'responsables', 'proprietes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer le poster spécifié dans la base de données
        $poster = Poster::findOrFail($id);

        // Retourner la vue avec les données du poster
        return view('posters.show', compact('poster'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer le poster spécifié dans la base de données
        $poster = Poster::findOrFail($id);

        // Afficher le formulaire d'édition du poster
        return view('posters.edit', compact('poster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer le poster spécifié dans la base de données
        $poster = Poster::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DatePoste' => 'required',
            'Emplacement' => 'required',
            'Caracteristiques' => 'required',
            'Details' => 'required',
            'IdResp' => 'required',
            'NumProp' => 'required',
        ]);

        // Mettre à jour les attributs du poster avec les données validées
        $poster->update($validatedData);

        // Rediriger vers la page de détails du poster mis à jour
        return redirect()->route('posters.show', compact('poster'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le poster spécifié dans la base de données
        $poster = Poster::findOrFail($id);

        // Supprimer le poster de la base de données
        $poster->delete();

        // Rediriger vers la liste des posters
        return redirect()->route('posters.index');
    }
}
