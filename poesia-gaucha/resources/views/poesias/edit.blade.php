<x-layout title="Editar Poesia - '{{ $poesia->nome }}'">
    <x-poesias.form :action="route('poesias.update', $poesia->id)" :nome="$poesia->nome" :update="true">

    </x-poesias.form>
</x-layout>
