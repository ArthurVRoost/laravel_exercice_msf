@extends('layouts.app')

@section('content')
    <h1>Ajouter un Type de Formation</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('type_informations.store') }}" method="POST">
        @csrf
        <label>Nom :</label>
        <input type="text" name="nom" maxlength="30">
        <button type="submit">Ajouter</button>
    </form>
@endsection