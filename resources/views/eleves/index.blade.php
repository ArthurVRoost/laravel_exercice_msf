@extends('layouts.app')

@section('content')
    <h1>Liste des Élèves</h1>
    <a href="{{ route('eleves.create') }}"><button>Ajouter un élève</button></a>
    <ul>
        @foreach($eleves as $eleve)
            <li>{{ $eleve->prenom }} {{ $eleve->nom }} - Âge : {{ $eleve->age }} - 
                @if($eleve->etat) Demandeur d'emploi @else Non demandeur @endif
            </li>
        @endforeach
    </ul>
@endsection