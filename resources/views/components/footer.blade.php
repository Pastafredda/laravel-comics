<div id="footer">
    <footer>
        <div class="container">
            <div class="container-footer">
                <div class="menu-footer">
                    @foreach ($footers as $footer)
                        <div class="cardo">
                            <h5>{{ $footer['title'] }}</h5>
                            <ul>
                                @foreach ($footer['texts'] as $text)
                                    <li>
                                        <a href="#">{{ $text['text'] }}</a>
                                @endforeach
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="logo-footer"></div>
            </div>
        </div>
        <div class="finale">
            <div class="container">
                <div class="nav-footer">
                    <div class="sign-up">
                        <a href="#">SIGN-UP NOW!</a>
                    </div>
                    <div>
                        <ul class="social">
                            <li>FOLLOW US</li>
                            <li>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ Vite::asset('resources/img/footer-periscope.png') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}"></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
