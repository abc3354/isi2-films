@extends('template')

@section('titrePage')
    Liste des Films
@endsection

@section('titreItem')
    <h1>Tous les films :</h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons sélectionné pour vous :</h5>
            <a id="btn-add" class="btn btn-success" href="{{ route('films.create') }}">Ajouter</a>
            <div class="dropdown" id="cat">
                <a data-toggle="dropdown" href="#" class="dropdown-toggle btn btn-secondary">Catégorie</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Toutes</a>
                </div>
            </div>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Catégorie</th>
                        <th>Titre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($lesFilms as $film)
                        <tr>
                            <td> {{ $film->id }} </td>
                            <td> {{ $film->categorie->libelle }}</td>
                            <td><strong>{{ $film->titre}}</strong>  </td>
                            <td><a class="btn btn-primary" href="{{ route('films.show', $film->id) }}">Voir</a></td>
                            <td><a class="btn btn-warning" href="{{ route('films.edit', $film->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('films.destroy', $film->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

