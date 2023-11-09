<?php

namespace App\Http\Controllers;

use App\Models\Mode;
use Illuminate\Http\Request;

class ModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les modes dans la base de données
        $modes = Mode::all();

        // Retourner la vue avec les données des modes
        return view('modes.index', compact('modes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'un nouveau mode
        return view('modes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'CodMod' => 'required',
            'LibMod' => 'required',
        ]);

        // Créer un nouveau mode avec les données validées
        $mode = Mode::create($validatedData);

        // Rediriger vers la page de détails du mode nouvellement créé
        return redirect()->route('modes.show', compact('mode'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mode $mode)
    {
        // Retourner la vue avec les données du mode
        return view('modes.show', compact('mode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mode $mode)
    {
        // Afficher le formulaire d'édition du mode
        return view('modes.edit', compact('mode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mode $mode)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'CodMod' => 'required',
            'LibMod' => 'required',
            'Etat' => 'required',
        ]);

        // Mettre à jour les attributs du mode avec les données validées
        $mode->update($validatedData);

        // Rediriger vers la page de détails du mode mis à jour
        return redirect()->route('modes.show', compact('mode'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mode $mode)
    {
        // Supprimer le mode de la base de données
        $mode->delete();

        // Rediriger vers la liste des modes
        return redirect()->route('modes.index');
    }
}
