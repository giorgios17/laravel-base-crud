@extends('layout.app')
@section('content')
    <div class="form-container">
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}"><br>
            <label for="description">Descrizione:</label>
            <input type="text" name="description" id="description" value="{{ $comic->description }}"><br>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}"><br>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" id="price" value="{{ $comic->price }}"><br>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" value="{{ $comic->series }}"><br>
            <label for="sale_date">Data d'uscita:</label>
            <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"><br>
            <label for="type">Genere:</label>
            <input type="text" name="type" id="type" value="{{ $comic->type }}"><br>
            <input type="submit">
        </form>
    </div>
@endsection
