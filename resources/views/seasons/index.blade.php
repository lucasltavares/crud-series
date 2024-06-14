<x-layout title="Temporadas de {!! $serie->nome !!}">

    <ul class="list-group">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <b>Temporada: </b>{{ $season->number }}

            <span class="badge bg-secondary">
               <b>Episódios:</b> {{ $season->episodes()->count() }}
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
