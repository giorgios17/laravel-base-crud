@extends('layout.app')
@section('content')
    <div class="form-container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value=""><br>
            <label for="description">Descrizione:</label>
            <input type="text" name="description" id="description" value=""><br>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" id="thumb" value=""><br>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" id="price" value=""><br>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" value=""><br>
            <label for="sale_date">Data d'uscita:</label>
            <input type="date" name="sale_date" id="sale_date" value=""><br>
            <label for="type">Genere:</label>
            <input type="text" name="type" id="type" value=""><br>
            <input type="submit">
        </form>
    </div>
@endsection
