@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Elenco treni</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($trains as $train)
            <div class="col-3">
                <div class="card">
                    <p>Azienda: {{ $train->agency }}</p>
                    <p>Codice treno: {{ $train->train_code }}</p>
                    <p>Numero carrozze: {{ $train->train_carriages }}</p>
                    <p>Stazione di Partenza: {{ $train->departure_station }}</p>
                    <p>Orario di partenza: {{ Carbon\Carbon::parse($train->departure_time)->format('H:i') }}</p>
                    <p>Stazione di arrivo: {{ $train->arrival_station }}</p>
                    <p>Orario di arrivo: {{ Carbon\Carbon::parse($train->arrival_time)->format('H:i') }}</p>
                    <p>Data di partenza: {{ Carbon\Carbon::parse($train->date)->format('d-m-Y') }}</p>
                </div>
            </div>
            @empty
            Nessun treno da mostrare
            @endforelse
        </div>
    </div>
</section>
@endsection