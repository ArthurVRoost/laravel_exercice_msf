@extends('layouts.app')

@section('content')
<h1>Ajouter un élève</h1>

<form action="{{ route('eleves.store') }}" method="POST">
    @csrf
    <label>Nom :</label>
    <input type="text" name="nom" maxlength="30" required>
    <br>
    <label>Prénom :</label>
    <input type="text" name="prenom" maxlength="30" required>
    <br>
    <label>Âge :</label>
    <input type="number" name="age" min="1" required>
    <br>
    <label>Demandeur d'emploi :</label>
    <input type="checkbox" name="etat" value="1">
    <br>
    <button type="submit">Enregistrer</button>
</form>
@endsection