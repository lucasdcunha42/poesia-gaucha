<x-layout title="Edições">

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Edição</th>
                <th scope="col">Livreto</th>
                <th scope="col">Informações</th>
                <th scope="col">Resultados</th>
            </tr>
            </thead>
            <tbody>
            @foreach($editions as $edition)
                    <tr>
                        <th scope="row">{{$edition->numero_edicao}}º</th>
                        <td>{{$edition->livreto}}</td>
                        <td>{{substr($edition->informacoes, 0, 100)}}...</td>
                        <td>{{substr($edition->resultados, 0, 100)}}...</td>
                        <td>
                            <span class="d-flex justify-content-xl-center">
                                <a href="{{ route('admin.editions.edit', $edition->id) }}" class="btn btn-primary btn-sm">
                                    Alterar
                                </a>

                                <form action="{{route('admin.editions.destroy', $edition->id) }}"
                                    method="post"
                                    class="ms-3">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"> Excluir </button>
                                </form>
                            </span>
                        </td>
                    </tr>
                </li>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.editions.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    <script>
        const edition = {{ Js::from($editions) }};
    </script>
</x-layout>
