<x-layout title="Nova Edição">


    <form action="{{ route('admin.editions.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-1">
                <label for="numero_edicao" class="form-label">Edição: </label>
                <input type="text" autofocus
                    id="numero_edicao"
                    name="numero_edicao"
                    class="form-control"
                    value="{{ old('numero_edicao') }}">
            </div>
            <div class="col-4">
                <label for="livreto" class="form-label">Livreto: </label>
                <input type="text" autofocus
                    id="livreto"
                    name="livreto"
                    class="form-control"
                    value="{{ old('livreto') }}">
            </div>
            <div class="col-4">
                <label for="informacoes" class="form-label">Informacões: </label>
                <input type="text" autofocus
                    id="informacoes"
                    name="informacoes"
                    class="form-control"
                    value="{{ old('informacoes') }}">
            </div>
            <div class="col-3">
                <label for="resultados" class="form-label">Resultados: </label>
                <input type="text" autofocus
                    id="resultados"
                    name="resultados"
                    class="form-control"
                    value="{{ old('resultados') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> Adcionar </button>
    </form>

</x-layout>
