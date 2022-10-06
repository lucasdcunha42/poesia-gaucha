<x-layout title="Poesias">

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset
    <ul class="list-group">
        @foreach($poesias as $poesia)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$poesia->titulo}}

                <span class="d-flex">
                    <a href="{{ route('admin.poesias.edit', $poesia->id) }}" class="btn btn-primary btn-sm">
                        Alterar
                    </a>
                    <form action="{{route('admin.poesias.destroy', $poesia->id) }}" method="post" class="ms-3">
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
    <a href="{{route('admin.poesias.create')}}" class="btn btn-dark mb-2 aling-right">Adicionar</a>

    <script>
        const poesias = {{ Js::from($poesias) }};
    </script>
</x-layout>
