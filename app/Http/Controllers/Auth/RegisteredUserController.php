<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Récupérer les données du formulaire
        $email = $request->input('email');
        $password = $request->input('password');
        $nom = $request->input('Nom');
        $postnom = $request->input('Postnom');
        $prenom = $request->input('Prenom');
        $pseudo = $request->input('Pseudo');
        $sexe = $request->input('Sexe');

        // Créer et enregistrer l'utilisateur

        $user = new User();
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->Nom = $nom;
        $user->Postnom = $postnom;
        $user->Prenom = $prenom;
        $user->Pseudo = $pseudo;
        $user->Role = 'user';
        $user->Sexe = $sexe;
        $user->save();

        // Autres actions nécessaires après l'enregistrement de l'utilisateur
        Event::dispatch(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
