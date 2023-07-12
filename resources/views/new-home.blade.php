@extends('layouts.main-layout')
@section('content')
    <div>
        <h2>fai finta che ci sia un jumbo</h2>
    </div>
    <h1>incredibile nuovo layout con tutti i dati dei fumetti</h1>
    <div>
        <a href="{{ route('home') }}"> --> ritorna alla pagina di prima che è più bella... vabbè non concentrarti
            sull'layout, vedi che i link funzionano <-- </a>
    </div>

    <div class="comic">
        <img src={{ $fumetti[0]['thumb'] }} alt="">
    </div>
    <h5 class="text-black">{{ $fumetti[0]['series'] }}</h5>
    <h5 class="text-black">{{ $fumetti[0]['price'] }}</h5>
    <p class="text-black">{{ $fumetti[0]['description'] }}</p>
@endsection
