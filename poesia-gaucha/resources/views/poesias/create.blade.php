<x-layout title="Nova Poesia">
    <form action="/poesia/salvar" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary"> Adcionar </button>
    </form>
</x-layout>
