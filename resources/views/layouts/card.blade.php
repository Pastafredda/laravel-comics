<div class="flex-comics">
    <div id="card">
        @foreach ($fumetti as $fumetto)
            <div class="comic">
                <img src={{ $fumetto['thumb'] }}" alt="">
                <h5>{{ $fumetto['series'] }}</h5>
            </div>
        @endforeach
    </div>
</div>
