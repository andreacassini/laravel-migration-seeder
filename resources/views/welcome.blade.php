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
            <div class="row my-5">
                @foreach($trains as $train)
                <div class="card mx-4" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title"><strong>{{$train->azienda}}</strong></h2>
                        <h4 class="card-text"><strong>Stazione partenza: </strong>{{$train->stazione_partenza}}</h4>
                        <h4 class="card-text"><strong>Stazione arrivo: </strong>{{$train->stazione_arrivo}}</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Codice treno: </strong>{{$train->codice_treno}}</li>
                        <li class="list-group-item"><strong>Orario partenza: </strong>{{$train->orario_partenza}}
                            <li class="list-group-item"><strong>Orario arrivo: </strong>{{$train->orario_arrivo}}
                        </li>
                        <li class="list-group-item">
                            @if(($train->tempo_ritardo) === NULL)
                                <p>Il treno non ha ritardo</p>
                            @else
                                {{$train->tempo_ritardo.' minuti'}}</li>
                            @endif
                    </ul>
                    <div class="card-body">
                        <p><strong>Data di partenza: </strong>{{$train->data_partenza}}</p>
                        <p><strong>Data di arrivo: </strong>{{$train->data_arrivo}}</p>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>