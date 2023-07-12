<div id="card">
    <div class="flex-comics">
        @foreach ($fumetti as $fumetto)
            <div class="comic">
                <a href="{{ route('new-home') }}"><img src={{ $fumetto['thumb'] }} alt=""></a>
                <h5>{{ $fumetto['series'] }}</h5>
            </div>
        @endforeach
    </div>
</div>
