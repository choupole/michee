<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les propriétés dans la base de données
        $proprietes = Propriete::all();
        $categories = Categorie::all();

        // Retourner la vue avec les données des propriétés
        return view('admin.proprietes.index', compact('proprietes', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $proprietes = Propriete::all();

        // Afficher le formulaire de création d'une nouvelle propriété
        return view('admin.proprietes.create', compact('proprietes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DesignProp' => 'required',
            'Descript' => 'required',
            'TypeProp' => 'required',
            'CodCat' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
        ]);

        // Enregistrer l'propriete dans la base de données
        $propriete = new Propriete();
        $propriete->DesignProp = $validatedData['DesignProp'];
        $propriete->Descript = $validatedData['Descript'];
        $propriete->TypeProp = $validatedData['TypeProp'];
        $propriete->CodCat = $validatedData['CodCat'];

        // Enregistrer les images
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        $filename1 = time().'_1.'.$image1->getClientOriginalExtension();
        $filename2 = time().'_2.'.$image2->getClientOriginalExtension();
        $filename3 = time().'_3.'.$image3->getClientOriginalExtension();

        $image1->move(public_path('assets/uploads/proprietes/'), $filename1);
        $image2->move(public_path('assets/uploads/proprietes/'), $filename2);
        $image3->move(public_path('assets/uploads/proprietes/'), $filename3);

        $propriete->image1 = $filename1;
        $propriete->image2 = $filename2;
        $propriete->image3 = $filename3;

        $propriete->save();

        return redirect()->route('proprietes.index')
                        ->with('success', 'L\'propriete a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer la propriété spécifiée dans la base de données
        $propriete = Propriete::findOrFail($id);

        // Retourner la vue avec les données de la propriété
        return view('admin.proprietes.show', compact('propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer la propriété spécifiée dans la base de données
        $propriete = Propriete::findOrFail($id);

        // Afficher le formulaire d'édition de la propriété
        return view('proprietes.edit', compact('propriete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer la propriété spécifiée dans la base de données
        $propriete = Propriete::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'DesignProp' => 'required',
            'Descript' => 'required',
            'Image1' => 'required',
            'Image2' => 'required',
            'Image3' => 'required',
            'TypeProp' => 'required',
            'CodCat' => 'required',
        ]);

        // Mettre à jour les attributs de la propriété avec les données validées
        $propriete->update($validatedData);

        // Rediriger vers la page de détails de la propriété mise à jour
        return redirect()->route('proprietes.show', compact('propriete'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la propriété spécifiée dans la base de données
        $propriete = Propriete::findOrFail($id);

        // Supprimer la propriété de la base de données
        $propriete->delete();

        // Rediriger vers la liste des propriétés
        return redirect()->route('proprietes.index');
    }
}
