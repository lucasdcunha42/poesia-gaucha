<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="row mb-3">
        <div class="col-1">
            <label for="numero_edicao" class="form-label">Edição: </label>
            <input type="text" autofocus
                id="numero_edicao"
                name="numero_edicao"
                class="form-control"
                @isset ($numero_edicao) value="{{ $numero_edicao }}" @endisset >
        </div>

        <div class="col-4">
            <label for="livreto" class="form-label">Livreto: </label>
            <input type="text" autofocus
                id="livreto"
                name="livreto"
                class="form-control"
                @isset ($livreto) value="{{ $livreto }}" @endisset>
        </div>
        <div class="col-4">
            <label for="informacoes" class="form-label">Informacões: </label>
            <input type="text" autofocus
                id="informacoes"
                name="informacoes"
                class="form-control"
                @isset ($informacoes) value="{{ $informacoes }}" @endisset>
        </div>
        <div class="col-3">
            <label for="resultados" class="form-label">Resultados: </label>
            <input type="text" autofocus
                id="resultados"
                name="resultados"
                class="form-control"
                @isset ($resultados) value="{{ $resultados }}" @endisset>
        </div>
    </div>

    <button type="submit" class="btn btn-primary"> Atualizar </button>
</form>
