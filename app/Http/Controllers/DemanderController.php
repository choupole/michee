<?php

namespace App\Http\Controllers;

use App\Models\Demander;
use Illuminate\Http\Client\Request;

class DemanderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les demandes dans la base de données
        $demandes = Demander::all();

        // Retourner la vue avec les données des demandes
        return view('demandes.index', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'une nouvelle demande
        return view('demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire en utilisant les attributs fillable du modèle
        $validatedData = $request->validate([
            'DatDemande' => 'required',
            'HeureDemande' => 'required',
            'IdVisite' => 'required',
            'NumReq' => 'required',
        ]);

        // Créer une nouvelle demande avec les données validées
        $demande = Demander::create($validatedData);

        // Rediriger vers la page de détails de la demande nouvellement créée
        return redirect()->route('demandes.show', compact('demande'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer la demande spécifiée dans la base de données
        $demande = Demander::findOrFail($id);

        // Retourner la vue avec les données de la demande
        return view('demandes.show', compact('demande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer la demande spécifiée dans la base de données
        $demande = Demander::findOrFail($id);

        // Afficher le formulaire d'édition de la demande
        return view('demandes.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer la demande spécifiée dans la base de données
        $demande = Demander::findOrFail($id);

        // Valider les données du formulaire en utilisant les attributs fillable du modèle
        $validatedData = $request->validate([
            'DatDemande',
            'HeureDemande',
            'IdVisite',
            'NumReq',
        ]);

        // Mettre à jour les attributs de la demande avec les données validées
        $demande->update($validatedData);

        // Rediriger vers la page de détails de la demande mise à jour
        return redirect()->route('demandes.show', compact('demande'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la demande spécifiée dans la base de données
        $demande = Demander::findOrFail($id);

        // Supprimer la demande de la base de données
        $demande->delete();

        // Rediriger vers la liste des demandes
        return redirect()->route('demandes.index');
    }
}
