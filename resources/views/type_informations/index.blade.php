@extends('layouts.app')

@section('content')
    <h1>Types de Formations</h1>
    <a href="{{ route('type_informations.create') }}">
        <button>Ajouter un type de formation</button>
    </a>
    <ul>
        @foreach($typeformations as $type)
            <li>{{ $type->nom }}</li>
        @endforeach
    </ul>
@endsection