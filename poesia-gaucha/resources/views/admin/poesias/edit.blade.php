<x-layout title="Editar Poesia - '{!! $poesia->titulo !!}'">
    <x-poesias.form :action="route('admin.poesias.update', $poesia->id)" :titulo="$poesia->titulo" :update="true">

    </x-poesias.form>
</x-layout>
