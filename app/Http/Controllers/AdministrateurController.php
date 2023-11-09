<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrateurs = Administrateur::all();

        // Utilisation de compact pour passer les données à la vue
        return view('administrateurs.index', compact('administrateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $administrateurs = Administrateur::all();

        return view('administrateurs.create', compact('administrateurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
        ]);

        $administrateur = Administrateur::create($validatedData);

        // Utilisation de compact pour passer les données à la vue
        return redirect()->route('administrateurs.show', compact('administrateur'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $administrateur = Administrateur::findOrFail($id);

        // Utilisation de compact pour passer les données à la vue
        return view('administrateurs.show', compact('administrateur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $administrateur = Administrateur::findOrFail($id);

        // Utilisation de compact pour passer les données à la vue
        return view('administrateurs.edit', compact('administrateur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $administrateur = Administrateur::findOrFail($id);

        $validatedData = $request->validate([
            'date' => 'required',
        ]);

        $administrateur->update($validatedData);

        // Utilisation de compact pour passer les données à la vue
        return redirect()->route('administrateurs.show', compact('administrateur'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrateur = Administrateur::findOrFail($id);

        $administrateur->delete();

        return redirect()->route('administrateurs.index');
    }
}
