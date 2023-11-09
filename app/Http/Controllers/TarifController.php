<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les tarifs dans la base de données
        $tarifs = Tarif::all();

        // Retourner la vue avec les données des tarifs
        return view('admin.tarifs.index', compact('tarifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'un nouveau tarif
        return view('tarifs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DesignTarif' => 'required',
            'Montant' => 'required',
        ]);

        // Créer un nouveau tarif avec les données validées
        $tarif = Tarif::create($validatedData);

        // Rediriger vers la page de détails du tarif nouvellement créé
        return redirect()->route('tarifs.index', compact('tarif'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer le tarif spécifié dans la base de données
        $tarif = Tarif::findOrFail($id);

        // Retourner la vue avec les données du tarif
        return view('tarifs.show', compact('tarif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer le tarif spécifié dans la base de données
        $tarif = Tarif::findOrFail($id);

        // Afficher le formulaire d'édition du tarif
        return view('tarifs.edit', compact('tarif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer le tarif spécifié dans la base de données
        $tarif = Tarif::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DesignTarif' => 'required',
            'Montant' => 'required',
        ]);

        // Mettre à jour les attributs du tarif avec les données validées
        $tarif->update($validatedData);

        // Rediriger vers la page de détails du tarif mis à jour
        return redirect()->route('tarifs.show', compact('tarif'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le tarif spécifié dans la base de données
        $tarif = Tarif::findOrFail($id);

        // Supprimer le tarif de la base de données
        $tarif->delete();

        // Rediriger vers la liste des tarifs
        return redirect()->route('tarifs.index');
    }
}
