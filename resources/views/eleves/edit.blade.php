@extends('layouts.app')

@section('content')
    <h1>Modifier un élève</h1>
    <form action="{{ route('eleves.update', $eleve) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nom :</label>
        <input type="text" name="nom" value="{{ old('nom', $eleve->nom) }}" maxlength="30"> 
        <br>

        <label>Prénom :</label>
        <input type="text" name="prenom" value="{{ old('prenom', $eleve->prenom) }}" maxlength="30">
        <br>

        <label>Âge :</label>
        <input type="number" name="age" value="{{ old('age', $eleve->age) }}">
        <br>

        <label>État :</label>
        <input type="checkbox" name="etat" value="1" {{ old('etat', $eleve->etat) ? 'checked' : '' }}>
        <br>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection