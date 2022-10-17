<x-layout title="Poesias">

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset
        <div class="table-responsive">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-sm-1 text-center">#</th>
                    <th scope="col" class="col-sm-4">Poesia</th>
                    <th scope="col" class="col-sm-4">Autor</th>
                    <th scope="col" class="col-sm-1 text-center">Edição</th>
                    <th scope="col" class="col-sm-2 text-center">Ação</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($poesias as $poesia)
                    <th scope="row" class="text-center">{{$poesia->id}}</th>
                    <td> {{$poesia->titulo}}</td>
                    <td> {{$poesia->autor}}</td>
                    <td class="text-center">{{$poesia->editions_id}}</td>
                    <td class="text-center align-middle">
                        <div class="btn-group">
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
                        </div>
                    </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    <a href="{{route('admin.poesias.create')}}" class="btn btn-dark mb-2 aling-right">Adicionar</a>

    <script>
        const poesias = {{ Js::from($poesias) }};
    </script>
</x-layout>
