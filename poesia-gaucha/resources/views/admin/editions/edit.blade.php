<x-layout title="Editar {!! $edition->numero_edicao !!}º Edição">
    <x-editions.form :action="route('admin.editions.update', $edition->id)"
        :titulo="$edition->numero_edicao"
        :livreto="$edition->livreto"
        :informacoes="$edition->informacoes"
        :resultados="$edition->resultados"
        :update="true">

    </x-editions.form>
</x-layout>
