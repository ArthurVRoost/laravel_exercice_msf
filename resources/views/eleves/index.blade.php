@extends('layouts.app')

@section('content')
    <h1>Liste des Élèves</h1>

    <a href="{{ route('eleves.create') }}">
        <button>Ajouter un élève</button>
    </a>

    <ul>
        @foreach($eleves as $eleve)
            <li>
                {{ $eleve->nom }} {{ $eleve->prenom }} ({{ $eleve->age }} ans)
                
                <!-- Bouton Editer -->
                <a href="{{ route('eleves.edit', $eleve) }}">
                    <button>Modifier</button>
                </a>

                <!-- Formulaire Supprimer -->
                <form action="{{ route('eleves.destroy', $eleve) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Supprimer cet élève ?')">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection