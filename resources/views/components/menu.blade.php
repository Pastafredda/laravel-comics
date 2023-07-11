<div id="menu">
    <div class="main-menu">
        <div class="container">
            <div class="card-menu">
                @foreach ($cards as $card)
                    <a href="#" class="cardo">
                        <div class="logo-card">
                            <img src="{{ Vite::asset('resources/img/' . $card['image']) }}" alt="">
                        </div>
                        <span href="#">{{ $card['text'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
