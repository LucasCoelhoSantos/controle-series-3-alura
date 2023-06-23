@component('mail::message')

## Série {{ $seriesName }} criada

A série {{ $seriesName }} com {{ $qtdSeasons }} temporadas e {{ $episodesBySeason }} episódios por temporada foi criada.

Acesse aqui:

@component('mail::button', ['url' => route('seasons.index', $idSeries)])
Ver série
@endcomponent

@endcomponent