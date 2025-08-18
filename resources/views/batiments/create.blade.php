@extends('layouts.app')

@section('content')
<h1>Ajouter un bâtiment</h1>

<form action="{{ route('batiments.store') }}" method="POST">
    @csrf
    <label>Nom :</label>
    <input type="text" name="nom" maxlength="30" required>
    <br>
    <label>Description :</label>
    <textarea name="description"></textarea>
    <br>
    <button type="submit">Enregistrer</button>
</form>
@endsection