<x-layout title="Poesias">
    <a href="/poesia/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($poesias as $poesia)
            <li class="list-group-item">{{$poesia}}</li>
        @endforeach
    </ul>

    <script>
        const poesias = {{ Js::from($poesias) }};
    </script>
</x-layout>
