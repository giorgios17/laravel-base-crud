@extends('layout.app')
@section('content')
    <h1>Lista fumetti:</h1>
    <div class="flex">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>Titolo: </h3>
                <p>{{ $comic->title }}</p>
                <h5>Serie: {{ $comic->series }}</h5>
                <h3>Prezzo: </h3>
                <p>{{ $comic->price }}€</p>
                <h3>Data d'uscita: </h3>
                <p>{{ $comic->sale_date }}</p>
                <h3>Genere: </h3>
                <p>{{ $comic->type }}</p>
                <a href="{{ route('comics.show', $comic->id) }}">LEGGI DESCRIZIONE</a>
            </div>
        @endforeach
    </div>
@endsection()
