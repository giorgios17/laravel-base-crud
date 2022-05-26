@extends('layout.app')
@section('content')
    <h1>Lista fumetti:</h1>
    <a class="add-comic" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
    <div class="flex">
        @foreach ($comics as $comic)
            <div class="card">
                <a class="mod-comic" href="{{ route('comics.edit', $comic->id) }}">MODIFICA</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input onclick="return confirm('Are you sure you want to delete this item?')" class="delete-comic"
                        type="submit" value="Cancella">
                </form>
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
