<x-layout title="Poesias">

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset

        <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Poesia</th>
                <th scope="col">Autor</th>
                <th scope="col">Edição</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach($poesias as $poesia)
                <th scope="row">{{$poesia->id}}</th>
                <td>{{$poesia->titulo}}</td>
                <td>{{$poesia->autor}}</td>
                <td>{{$poesia->editions_id}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>

    <a href="{{route('admin.poesias.create')}}" class="btn btn-dark mb-2 aling-right">Adicionar</a>

    <script>
        const poesias = {{ Js::from($poesias) }};
    </script>
</x-layout>
