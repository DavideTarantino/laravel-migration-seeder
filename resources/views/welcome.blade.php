@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

<main>
    @foreach ($trains as $train)
    <div>
        <h3>Compagnia: {{$train['company']}}</h3>
        <h3>Stazione di partenza: {{$train['departure_station']}}</h3>
        <h3>Stazione d'arrivo: {{$train['arrival_station']}}</h3>
        <h3>Orario di Partenza di partenza: {{$train['departure_time']}}</h3>
        <h3>Orario di Arrivo: {{$train['arrival_time']}}</h3>
        <h3>Codice: {{$train['train_code']}}</h3>
        <h3>In orario: {{($train['on_time'] == 1) ? 'si' : 'no'}}</h3>
        <h3>Cancellato: {{($train['cancelled'] == 1) ? 'si' : 'no'}}</h3>
    </div>
    @endforeach
</main>