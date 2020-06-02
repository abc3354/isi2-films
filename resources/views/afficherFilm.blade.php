@extends('template')

@section('titrePage')
    Information sur le Film
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Titre : {{ $film->titre }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année sortie : {{ $film->anneeSortie }}</p>
                <p>Description : {{ $film->description }}</p>
                <hr>
                <p>Catégorie : {{ $film->categorie->libelle }}</p>
            </div>
        </div>
    </div>
@endsection
