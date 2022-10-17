<x-layout title="Editar Poesia - '{!! $poesia->titulo !!}'">
    <x-poesias.form :action="route('admin.poesias.update', $poesia->id)"
        :autor="$poesia->autor"
        :titulo="$poesia->titulo"
        :foto="$poesia->foto"
        :pdf="$poesia->link_pdf"
        :video="$poesia->link_video"
        :audio="$poesia->link_audio"
        :edition="$poesia->editions_id"
        :texto="$poesia->texto"
        :update="true">

    </x-poesias.form>
</x-layout>
