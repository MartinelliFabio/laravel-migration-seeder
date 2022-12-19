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
        <table>
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
            </tr>
        @endforeach
        </table>
    </main>

</body>

</html>
