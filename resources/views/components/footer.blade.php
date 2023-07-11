<div id="footer">
    <div class="container">
        <div class="container-footer">
            <div class="menu-footer">
                @foreach ($footers as $footer)
                    <div class="cardo">
                        <h5>{{ $footer['title'] }}</h5>
                @endforeach
                <ul>
                    <li>
                        @foreach ($footers['texts'] as $footer)
                            <a href="#">{{ $footer['text'] }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>


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
                    <li><a href="#"><img src="../assets/img/footer-facebook.png" alt=""></a></li>
                    <li><a href="#"><img src="../assets/img/footer-twitter.png" alt=""></a></li>
                    <li><a href="#"><img src="../assets/img/footer-youtube.png" alt=""></a></li>
                    <li><a href="#"><img src="../assets/img/footer-pinterest.png" alt=""></a></li>
                    <li><a href="#"><img src="../assets/img/footer-periscope.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
