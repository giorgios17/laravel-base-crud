@extends('layout.app')
@section('content')
    <div>
        <h3>Titolo: </h3>
        <p>{{ $comic->title }}</p>
        <h3>Descrizione:</h3>
        <p>{{ $comic->description }}</p>
        <h5>Serie: {{ $comic->series }}</h5>
        <h3>Prezzo: </h3>
        <p>{{ $comic->price }}€</p>
        <h3>Data d'uscita: </h3>
        <p>{{ $comic->sale_date }}</p>
        <h3>Genere: </h3>
        <p>{{ $comic->type }}</p>
    </div>
    <a href="{{ route('comics.index') }}">Lista fumetti</a>
@endsection
