<x-layout title="Poesias">
    <a href="{{route('poesias.create')}}" class="btn btn-dark mb-2">Adicionar</a>
        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset
    <ul class="list-group">
        @foreach($poesias as $poesia)
            <li class="list-group-item">
                {{$poesia->nome}}

                <form action="{{route('poesias.destroy', $poesia->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    Excluir
                </button>
                </form>
            </li>
        @endforeach
    </ul>

    <script>
        const poesias = {{ Js::from($poesias) }};
    </script>
</x-layout>
