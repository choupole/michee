<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les responsables dans la base de données
        $responsables = Responsable::all();

        // Retourner la vue avec les données des responsables
        return view('admin.responsables.index', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'un nouveau responsable
        return view('admin.responsables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $email = $request->input('email');
        $password = $request->input('password');
        $nom = $request->input('Nom');
        $postnom = $request->input('Postnom');
        $prenom = $request->input('Prenom');
        $pseudo = $request->input('Pseudo');
        $PhotoProfil = $request->input('PhotoProfil');
        $AgeResp = $request->input('AgeResp');
        $sexe = $request->input('Sexe');
        $Descript = $request->input('Descript');

        // Créer et enregistrer l'utilisateur

        $user = new Responsable();
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->Nom = $nom;
        $user->Postnom = $postnom;
        $user->Prenom = $prenom;
        $user->Pseudo = $pseudo;
        $user->AgeResp = $AgeResp;
        $user->Role = 'resp';
        $user->Descript = $Descript;
        $user->Sexe = $sexe;
        $user->save();

        // Valider les données du formulaire
        $responsable = $user;

        // Rediriger vers la page de détails du responsable nouvellement créé
        return redirect()->route('responsables.index', compact('responsable'))->with('success', 'Responsable ou propriétaire ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer le responsable spécifié dans la base de données
        $responsable = Responsable::findOrFail($id);

        // Retourner la vue avec les données du responsable
        return view('admin.responsables.show', compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer le responsable spécifié dans la base de données
        $responsable = Responsable::findOrFail($id);

        // Afficher le formulaire d'édition du responsable
        return view('responsables.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer le responsable spécifié dans la base de données
        $responsable = Responsable::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'PhotoProfil' => 'required',
            'AgeResp' => 'required',
            'Descript' => 'required',
        ]);

        // Mettre à jour les attributs du responsable avec les données validées
        $responsable->update($validatedData);

        // Rediriger vers la page de détails du responsable mis à jour
        return redirect()->route('admin.responsables.show', compact('responsable'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le responsable spécifié dans la base de données
        $responsable = Responsable::findOrFail($id);

        // Supprimer le responsable de la base de données
        $responsable->delete();

        // Rediriger vers la liste des responsables
        return redirect()->route('responsables.index');
    }
}
