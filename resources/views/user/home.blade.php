@extends('layouts.app')

@section('content')
@if (session('artist_success'))
    <div class="alert alert-success" style="position: fixed; top: 10px; right: 10px;">
        {{ session('artist_success') }}
    </div>
    <script>
        // Masquer le message de succès après 3 secondes
        setTimeout(function() {
            document.querySelector('.alert-success').style.display = 'none';
        }, 3000); // 3000 millisecondes = 3 secondes
    </script>
@endif

@if(session()->has('success'))
    <div class="alert alert-success" style="position: fixed; top: 10px; right: 10px;">
        {{ session()->get('success') }}
    </div>
    <script>
        // Masquer le message de succès après 3 secondes
        setTimeout(function() {
            document.querySelector('.alert-success').style.display = 'none';
        }, 3000); // 3000 millisecondes = 3 secondes
    </script>
@endif
@include('partialsVisitor.hero')


@include('partialsVisitor.popularP')


@include('partialsVisitor.ourAgents')

@include('partialsVisitor.feature')


@endsection