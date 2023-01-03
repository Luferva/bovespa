@extends ('layouts.main')

@section('title', 'BrApi - Home')

@section('titleH1', 'Lista de Ações')

@section('content')

   

<form action="#" method="POST" class="row g-3">
        <div class="col-1">
            <label for="staticlabel" class="visually-hidden"></label>
           <input type="text" readonly class="form-control-plaintext" id="staticlabel"  value="Ordernar por: ">
        </div>
        <div class="col-auto">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Selecione aqui:</option>
                <option value="name">Nome</option>
                <option value="sector">Setor</option>
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
        </div>
    </form>


    <div id="actives-container" class="col-md-12">
        <div id="cards-container" class="row">
            @foreach ($apiArray as $item)
                <div class="card text-center col-md-2" style="width: 12rem">
                    <img src="{{ $item->logo }}" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-stock">{{ $item->stock }}</h5>
                        <p class="card-sector">{{ $item->sector }} </p>
                        <p class="card-sector-green"><strong>R$ {{ number_format($item->close, 2,",","") }}</strong></p>
                        <a href="#" class="btn btn-primary" onclick="visualizarActive('{{ $item->stock }}')"><ion-icon class="information-size"name="information-outline"></ion-icon></a>
                    </div>
                </div>
            @endforeach
        </div>
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
