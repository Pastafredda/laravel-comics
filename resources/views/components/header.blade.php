<div id="header">
    <div class="container">
        <div class="container-header">
            <div class="logo">
                <a href="/">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>
            </div>
            <div>
                <ul class="nav-menu">
                    @foreach ($links as $link)
                        <li>{{ $link['text'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
