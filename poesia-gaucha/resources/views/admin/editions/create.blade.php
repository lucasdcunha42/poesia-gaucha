<x-layout title="Nova Edição">

    <form action="{{ route('admin.editions.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-5">
                <label for="titulo" class="form-label">Edição: </label>
                <input type="text" autofocus
                       id="titulo"
                       name="numero_edicao"
                       class="form-control"
                       value="{{ old('numero_edicao') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> Adcionar </button>
    </form>

</x-layout>
