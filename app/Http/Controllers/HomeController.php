<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Propriete;
use App\Models\Tarif;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $proprietes = Propriete::all();

        $categorieTops = Categorie::orderBy('id', 'desc')->paginate(4);

        $proprieteTops = Propriete::orderBy('id', 'desc')->paginate(3);

        return view('user.home', compact('categories', 'categorieTops', 'proprietes', 'proprieteTops'));
    }

    public function visite()
    {
        $tarifs = Tarif::all();

        $proprietes = Propriete::paginate(9);

        return view('user.visite', compact('proprietes', 'tarifs'));
    }
}
