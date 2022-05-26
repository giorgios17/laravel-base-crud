@extends('layout.app')
@section('content')
    <div class="form-container">
        <form action="" method="POST">
            <label for="title">Titolo:</label>
            <input type="text" name="title" value=""><br>
            <label for="description">Descrizione:</label>
            <input type="text" name="description" value=""><br>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" value=""><br>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" value=""><br>
            <label for="series">Serie:</label>
            <input type="text" name="series" value=""><br>
            <label for="sale_date">Data d'uscita:</label>
            <input type="text" name="sale_date" value=""><br>
            <label for="type">Genere:</label>
            <input type="text" name="type" value=""><br>
            <input type="submit">
        </form>
    </div>
@endsection
