@extends('components.jumbo')

@section('card')
    <div id="card">
        <div class="flex-comics">
            @foreach ($fumetti as $fumetto)
                <div class="comic">
                    <img src={{ $fumetto['thumb'] }} alt="">
                    <h5>{{ $fumetto['series'] }}</h5>
                </div>
            @endforeach
        </div>
    </div>
@endsection
