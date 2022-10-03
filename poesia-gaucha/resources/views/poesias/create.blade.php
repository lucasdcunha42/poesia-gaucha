<x-layout title="Nova Poesia">

    <form action="{{ route('poesias.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-5">
                <label for="nome" class="form-label">Poesia: </label>
                <input type="text" autofocus
                       id="nome"
                       name="nome"
                       class="form-control"
                       value="{{ old('nome') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> Adcionar </button>
    </form>

</x-layout>
