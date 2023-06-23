<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        
        <div class="row mb-3">
            <div class="col-6">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" 
                        autofocus 
                        name="nome" 
                        id="nome" 
                        class="form-control"
                        value="{{ old('nome') }}">
            </div>
            <div class="col-3">
                <label for="seasonsQty" class="form-label">Temporadas:</label>
                <input type="text" 
                        name="seasonsQty" 
                        id="seasonsQty" 
                        class="form-control"
                        value="{{ old('seasonsQty') }}">
            </div>
            <div class="col-3">
                <label for="episodesPerSeason" class="form-label">Episódios:</label>
                <input type="text" 
                        name="episodesPerSeason" 
                        id="episodesPerSeason" 
                        class="form-control"
                        value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layout>