<x-layout title="Nova Poesia">
    <x-poesias.form :action="route('poesias.store')" :nome="old('nome')" :update="false"></x-poesias.form>
</x-layout>
