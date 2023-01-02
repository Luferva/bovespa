<!doctype html>
<html lang="en">

<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head> 

<body>

<form action="#" method="POST" class="row g-3">
    @foreach ($apiArray as $item)
    <div class="col-md-6">
        <label class="title" for="title">Codigo:</label>
        <input type="text" class="form-control" id="cod" name="cod" placeholder="Código" value="{{$item->symbol}}" readonly >
    </div>
    <div class="col-md-6">
        <label class="title" for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$item->shortName}}" readonly>
    </div>
    <div class="col-md-4">
        <label class="title" for="regularMarketPrice">Preço Atual:</label>
        <input type="text" class="form-control" id="regularMarketPrice" name="regularMarketPrice" value="{{$item->regularMarketPrice}}" readonly>
    </div>
    <div class="col-md-4">
        <label class="title"for="regularMarketDayHigh"><ion-icon name="arrow-up-outline"></ion-icon>Alta do Dia:</label>
        <input type="text" class="form-control" id="regularMarketDayHigh" name="regularMarketDayHigh" value="{{$item->regularMarketDayHigh}}" readonly>
    </div>
    <div class="col-md-4">
        <label class="title" for="regularMarketDayLow"><ion-icon name="arrow-down-outline"></ion-icon>Baixa do Dia:</label>
        <input type="text" class="form-control" id="regularMarketDayLow" name="regularMarketDayLow" value="{{$item->regularMarketDayLow}}" readonly>
    </div>
    @endforeach
</form>

 

</body>

</html>
