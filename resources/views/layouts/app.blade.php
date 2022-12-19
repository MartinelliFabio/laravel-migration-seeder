<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            @if(Route::currentRouteName() == 'home')
                <div class="my-5">
                    <a href="{{route('filtered')}}" class="p-3 rounded-3 filter">Filtra per data di partenza</a>
                </div>
            @else
                <div class="my-5">
                    <a href="/" class="p-3 rounded-3 filter">Mostra tutti i treni</a>
                </div>
            @endif
            <table class="d-flex justify-content-center">
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice del Treno</th>
                    <th>Numero di Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                    <th>Data di Partenza</th>
                </tr>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_partenza}}</td>
                    <td>{{$train->stazione_arrivo}}</td>
                    <td>{{$train->orario_partenza}}</td>
                    <td>{{$train->orario_arrivo}}</td>
                    <td>{{$train->codice_treno}}</td>
                    <td>{{$train->numero_carrozze}}</td>
                    <td>{{$train->in_orario}}</td>
                    <td>{{$train->cancellato}}</td>
                    <td>{{$train->data_partenza}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </main>

</body>

</html>
