@extends('layouts.app')

@section('content')
    <h1>Liste des Bâtiments</h1>
    <a href="{{ route('batiments.create') }}"><button>Ajouter un bâtiment</button></a>
    <ul>
        @foreach($batiments as $batiment)
            <li><strong>{{ $batiment->nom }}</strong> - {{ $batiment->description }}</li>
        @endforeach
    </ul>
@endsection