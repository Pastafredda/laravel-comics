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
                        <li><a href="#" @class([$link['current'] ? 'active' : 'black'])>{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
