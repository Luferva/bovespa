@extends ('layouts.main')

@section('title', 'BrApi - Home')

@section('content')


    <div id="select-container" class="col-md-12">
        <form action="#" method="post" class="col-md-12">
            @csrf
            <div class="col-md-4">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Ordenar por:</option>
                    <option value="name">Nome</option>
                    <option value="sector">Setor</option>
                </select>
            </div>
            <div class="col-md-6 "><button type="submit" class="btn btn-primary">Buscar</a></div>
        </form>
    </div>

    <div id="actives-container" class="col-md-12">
        <div id="cards-container text-center " class="row">
            @foreach ($apiArray as $item)
                <div class="card text-center col-md-2" style="width: 12rem;">
                    <img src="{{ $item->logo }}" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-stock">{{ $item->stock }}</h5>
                        <p class="card-sector">{{ $item->sector }} </p>
                        <p class="card-sector">Valor: {{$item->close}}</p>
                        <a href="/getticker/{{ $item->stock }}" class="btn btn-primary"> Saber   mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
