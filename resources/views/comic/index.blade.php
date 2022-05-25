<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div class="card">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h3>Titolo: </h3>
            <p>{{ $comic['title'] }}</p>
            <h3>Descrizione:</h3>
            <p>{{ $comic['description'] }}</p>
            <h3>Prezzo: </h3>
            <p>{{ $comic['price'] }}€</p>
            <h3>Serie: </h3>
            <p>Serie: {{ $comic['series'] }}</p>
            <h3>Data d'uscita: </h3>
            <p>{{ $comic['sale_date'] }}</p>
            <h3>Genere: </h3>
            <p>{{ $comic['type'] }}</p>
        </div>
    @endforeach
</body>

</html>
