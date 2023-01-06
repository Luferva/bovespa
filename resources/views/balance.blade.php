@extends ('layouts.main')

@section('title', 'BrApi - Saldo')

@section('titleH1', 'Saldo')

@section('content')


    {{-- {{ $balance }} --}}
    {{--  {{$user}} --}}

    <br>
    <div class="card text-white bg-primary w-50 mx-auto">
        <h3 class="card-header border-white bg-transparent">Carteira de {{$user->name}}</h3>
        <div class="card-body">
            <p class="card-saldo">R$ {{ number_format($balance->valor, 2, ',', '.') }}</p>
            <a href="#" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#extratoModal">Extrato</a>
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#depositoModal">Desposito</a>
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#saqueModal">Sacar</a>
        </div>
        <div class="card-footer border-white bg-transparent">Acessado dia DD-MM-YYYY</div>
    </div>


    <div class="modal fade" id="extratoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="depositoModal" tabindex="-1" aria-labelledby="depositoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="saqueModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


@endsection
