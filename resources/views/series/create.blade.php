<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="post">
    @csrf

<div class="row mb-3">
    <div class="col-8">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               autofocus
               id="nome"
               name="nome"
               class="form-control"
               value="{{ old('nome') }}">
    </div>

    <div class="col-2">
        <label for="seasonsqtd" class="form-label">Temporadas:</label>
        <input type="text"
               id="seasonsqtd"
               name="seasonsqtd"
               class="form-control"
               value="{{ old('seasonsqtd') }}">
    </div>

    <div class="col-2">
        <label for="episodeqtd" class="form-label">Episodios:</label>
        <input type="text"
               id="episodeqtd"
               name="episodeqtd"
               class="form-control"
               value="{{ old('episodeqtd') }}">
    </div>
</div>


    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

</x-layout>
