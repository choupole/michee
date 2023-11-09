<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les paiements dans la base de données
        $paiements = Paiement::all();

        // Retourner la vue avec les données des paiements
        return view('paiements.index', compact('paiements'));
    }

    public function create()
    {
        // Afficher le formulaire de création d'un nouveau paiement
        return view('paiements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'Numpaie' => 'required',
            'MontPaie' => 'required',
            'DatPaie' => 'required',
        ]);

        // Créer un nouveau paiement avec les données validées
        $paiement = Paiement::create($validatedData);

        // Rediriger vers la page de détails du paiement nouvellement créé
        return redirect()->route('paiements.show', compact('paiement'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer le paiement spécifié dans la base de données
        $paiement = Paiement::findOrFail($id);

        // Retourner la vue avec les données du paiement
        return view('paiements.show', compact('paiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer le paiement spécifié dans la base de données
        $paiement = Paiement::findOrFail($id);

        // Afficher le formulaire d'édition du paiement
        return view('paiements.edit', compact('paiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer le paiement spécifié dans la base de données
        $paiement = Paiement::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'Numpaie' => 'required',
            'MontPaie' => 'required',
            'DatPaie' => 'required',
        ]);

        // Mettre à jour les attributs du paiement avec les données validées
        $paiement->update($validatedData);

        // Rediriger vers la page de détails du paiement mis à jour
        return redirect()->route('paiements.show', compact('paiement'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le paiement spécifié dans la base de données
        $paiement = Paiement::findOrFail($id);

        // Supprimer le paiement de la base de données
        $paiement->delete();

        // Rediriger vers la liste des paiements
        return redirect()->route('paiements.index');
    }
}
