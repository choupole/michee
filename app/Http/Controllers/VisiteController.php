<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\Visite;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les visites dans la base de données
        $visites = Visite::all();
        $tarifs = Tarif::all();

        // Retourner la vue avec les données des visites
        return view('admin.visites.index', compact('visites', 'tarifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tarifs = Tarif::all();

        // Afficher le formulaire de création d'une nouvelle visite
        return view('admin.visites.create', compact('tarifs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        // Récupérer les données du formulaire
        $DesignVisite = $request->input('DesignVisite');
        $TypeVisit = $request->input('TypeVisit');
        $IdTarif = $request->input('IdTarif');

        // Valider les données si nécessaire
        // ...

        // Enregistrer l'category dans la base de données
        $visite = new Visite();
        $visite->DesignVisite = $DesignVisite;
        $visite->TypeVisit = $TypeVisit;
        $visite->IdTarif = $IdTarif;
        $visite->save();

        return redirect()->route('user.home')
                        ->with('success', 'la visite est créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer la visite spécifiée dans la base de données
        $visite = Visite::findOrFail($id);

        // Retourner la vue avec les données de la visite
        return view('visites.show', compact('visite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer la visite spécifiée dans la base de données
        $visite = Visite::findOrFail($id);

        // Afficher le formulaire d'édition de la visite
        return view('visites.edit', compact('visite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer la visite spécifiée dans la base de données
        $visite = Visite::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DesignVisite' => 'required',
            'TypeVisit' => 'required',
            'IdTarif' => 'required|exists:tarifs,id',
        ]);

        // Mettre à jour les attributs de la visite avec les données validées
        $visite->update($validatedData);

        // Rediriger vers la page de détails de la visite mise à jour
        return redirect()->route('visites.show', compact('visite'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la visite spécifiée dans la base de données
        $visite = Visite::findOrFail($id);

        // Supprimer la visite de la base de données
        $visite->delete();

        // Rediriger vers la liste des visites
        return redirect()->route('visites.index');
    }
}
