<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        // Votre logique de traitement pour la page d'administration
        return view('admin.index');
    }
}
