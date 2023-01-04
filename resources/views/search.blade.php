@extends ('layouts.main')

@section('title', 'BrApi - Search')

@section('titleH1', "Procurando por: $search")

@section('content')

    <body>

        @if ( $search)
            <p>Não foi possivel encontrar nenhuma papel por "{{ $search }}"! <a href="/">Ver Todas</a></p>
        @else
            <form action="#" method="POST" class="row g-3">
                @foreach ($apiArray as $item)
                    <div class="col-md-6">
                        <label class="title" for="title">
                            <ion-icon name="document-outline"></ion-icon> Codigo:
                        </label>
                        <input type="text" class="form-control" id="cod" name="cod" placeholder="Código"
                            value="{{ $item->symbol }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="title" for="name">
                            <ion-icon name="clipboard-outline"></ion-icon> Nome:
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $item->shortName }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="title" for="regularMarketPrice">
                            <ion-icon name="cash-outline" class="cash-color"></ion-icon> Preço Atual:
                        </label>
                        <input type="text" class="form-control" id="regularMarketPrice" name="regularMarketPrice"
                            value="R$ {{ number_format($item->regularMarketPrice, 2, ',', '') }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="title"for="regularMarketDayHigh">
                            <ion-icon name="arrow-up-outline" class="arrow-up"></ion-icon> Alta do Dia:
                        </label>
                        <input type="text" class="form-control" id="regularMarketDayHigh" name="regularMarketDayHigh"
                            value="R$ {{ number_format($item->regularMarketDayHigh, 2, ',', '') }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="title" for="regularMarketDayLow">
                            <ion-icon name="arrow-down-outline" class="arrow-down"></ion-icon> Baixa do Dia:
                        </label>
                        <input type="text" class="form-control" id="regularMarketDayLow" name="regularMarketDayLow"
                            value="R$ {{ number_format($item->regularMarketDayLow, 2, ',', '') }}" readonly>
                    </div>
                @endforeach
            </form>
    </body>


    @endif


@endsection
