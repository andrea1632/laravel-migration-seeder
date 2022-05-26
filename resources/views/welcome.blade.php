<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
    </head>
    <body>
        <h1 class="text-center">TRAINS!</h1>
        <div class="content">
            @foreach ($trains as $train)
            <div class="cardTrain">
                <p><strong>Azienda:</strong> {{$train->azienda}}</p>
                <p><strong>Stazione di partenza: </strong>{{$train->stazione_di_partenza}}</p>
                <p><strong>orario di partenza : </strong>{{$train->orario_di_partenza}}</p>
                <p><strong>orario d'arrivo: </strong>{{$train->orario_di_arrivo}}</p>
                <p><strong>codice treno: </strong>{{$train->codice_treno}}</p>
                <p><strong>numero carrozze: </strong>{{$train->numero_carrozze}}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
