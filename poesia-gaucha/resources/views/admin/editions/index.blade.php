<x-layout title="Edições">

    <a href="{{route('admin.editions.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset
<ul class="list-group">
    @foreach($editions as $edition)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$edition->numero_edicao}}

            <span class="d-flex">
                <a href="{{ route('admin.poesias.edit', $edition->id) }}" class="btn btn-primary btn-sm">
                    Alterar
                </a>
                <form action="{{route('admin.poesias.destroy', $edition->id) }}" method="post" class="ms-3">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    Excluir
                </button>
                </form>
            </span>
        </li>
    @endforeach
</ul>

    <script>
        const edition = {{ Js::from($editions) }};
    </script>
</x-layout>
