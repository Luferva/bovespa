<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>


<div id="cards-container" class="row">
    @foreach ($apiArray as $item)
        <div class="card col-md-3">
            <img src="{{ $item->logo }}" alt="{{ $item->name }}">
            <div class="card-body">
                <h5 class="card-stock">{{ $item->stock }}</h5>
                <p class="card-sector">{{ $item->sector }} </p>
                <a href="/{{ $item->stock }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    @endforeach
</div>






</body>

</html>
