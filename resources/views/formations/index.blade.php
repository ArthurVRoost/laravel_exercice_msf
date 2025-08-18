@extends('layouts.app')

@section('content')
    <h1>Liste des Formations</h1>
    <a href="{{ route('formations.create') }}"><button>Ajouter une formation</button></a>
    <ul>
        @foreach($formations as $formation)
            <li><strong>{{ $formation->nom }}</strong> - {{ $formation->description }}</li>
        @endforeach
    </ul>
@endsection