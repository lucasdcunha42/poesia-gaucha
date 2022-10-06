    <form action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text"
                   id="nome"
                   name="titulo"
                   class="form-control"
                   @isset ($titulo) value="{{ $titulo }}" @endisset >
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Adcionar </button>
        <a class="class btn btn-danger btn-sm" href="{{url()->previous()}}" > Voltar </a>

    </form>
