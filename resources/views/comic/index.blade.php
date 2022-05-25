<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div class="card">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h3>{{ $comic['title'] }}</h3>
            <p>{{ $comic['description'] }}</p>
            <p>{{ $comic['price'] }}</p>
            <p>{{ $comic['series'] }}</p>
            <p>{{ $comic['sale_date'] }}</p>
            <p>{{ $comic['type'] }}</p>
        </div>
    @endforeach
</body>

</html>
