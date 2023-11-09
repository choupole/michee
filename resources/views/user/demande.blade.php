@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dévenir un artiste</h1>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        <script>
            // Rediriger vers la route "user.home" après 3 secondes
            setTimeout(function() {
                window.location.href = "{{ route('user.home') }}";
            }, 3000); // 3000 millisecondes = 3 secondes
        </script>
    @endif
        <form action="{{ route('demandes.store') }}" method="POST">
            @csrf


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" class="form-control" value="{{ Auth::user()->username }}" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{ Auth::user()->nom }}" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="postnom">Postnom</label>
                        <input type="text" id="postnom" name="postnom" class="form-control" value="{{ Auth::user()->postnom }}" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" value="{{ Auth::user()->prenom }}" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select id="sexe" name="sexe" class="form-control" disabled>
                            <option value="m" {{ Auth::user()->sexe === 'm' ? 'selected' : '' }}>Masculin</option>
                            <option value="f" {{ Auth::user()->sexe === 'f' ? 'selected' : '' }}>Féminin</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="profil">Profil</label>
                        <input type="text" id="profil" name="profil" class="form-control" value="{{ Auth::user()->profil }}" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numtel">Numéro de téléphone</label>
                        <input type="text" id="numtel" name="numtel" class="form-control">
                    </div>
                </div>
            </div>

            <button type="submit" class=" mt-0 mb-2 btn btn-primary">Envoyer</button>
        </form>
    </div>
@endsection