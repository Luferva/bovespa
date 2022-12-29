<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Name</th>
            <th>Preço</th>
            <th>Alta do Dia</th>
            <th>Baixa do Dia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apiArray as $item)
        <tr>
            
            <td>{{ $item->symbol}}</td>
            <td>{{ $item->shortName }}</td>
            <td>{{ $item->regularMarketPrice}}</td>
            <td>{{ $item->regularMarketDayHigh }}</td>
            <td>{{ $item->regularMarketDayLow }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>
