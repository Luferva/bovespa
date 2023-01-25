@extends ('layouts.main')

@section('title', 'BrApi - Dashboard')

@section('titleH1', 'Lista de Ações')

@section('content')



    <form action="/" method="get" class="row g-3">
        <div class="col-1">
            <label for="staticlabel" class="visually-hidden"></label>
            <input type="text" readonly class="form-control-plaintext" id="staticlabel" value="Organizar: ">
        </div>
        <div class="col-auto">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="select" name="select">
                <option selected value="">Selecione:</option>
                <option value="name">Nome</option>
                <option value="close">Preço</option>
            </select>
        </div>
        <div class="col-1">
            <label for="staticlabel" class="visually-hidden"></label>
            <input type="text" readonly class="form-control-plaintext" id="staticlabel" value="Ordernar: ">
        </div>
        <div class="col-auto">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="select" name="order">
                <option selected value="">Selecione:</option>
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="text" class="form-label form-label-sm" placeholder="Define um limite" name="limit">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
        </div>
    </form>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($apiArray as $item)
            <div class="col">
                <div class="card">
                    <img src="{{ $item->logo }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-stock">{{ $item->stock }}</h5>
                        <p class="card-sector">{{ $item->sector }} </p>
                        <p class="card-sector-green"><strong>R$ {{ number_format($item->close, 2, ',', '') }}</strong></p>
                        <a href="#" class="btn btn-primary" onclick="visualizarActive('{{ $item->stock }}')">
                            <ion-icon class="information-size"name="information-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Compra</button>
                </div>
            </div>
        </div>
    </div>


@endsection
