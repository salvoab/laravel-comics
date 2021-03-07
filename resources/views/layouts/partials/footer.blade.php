<footer>
    <div class="buy_bar">
        <div class="container">
            <div class="buy_element">
                <a href="#">
                    <img src="{{ asset('img/buy-bar-DCUI.svg') }}" alt="search">
                    DIGITAL COMICS
                </a>
            </div>

            <div class="buy_element">
                <a href="#">
                    <img src="{{ asset('img/buy-bar-DCshop.svg') }}" alt="search">
                    DC MERCHANDISE
                </a>
            </div>

            <div class="buy_element">
                <a href="#">
                    <img src="{{ asset('img/buy-bar-subscription.svg') }}" alt="search">
                    PRINT SUBSCRIPTIONS
                </a>
            </div>

            <div class="buy_element">
                <a href="#">
                    <img src="{{ asset('img/buy-bar-locator.svg') }}" alt="search">
                    COMIC SHOP LOCATOR
                </a>
            </div>
        </div>
    </div>

    <div class="middle_footer" style="background-image: url({{asset('img/footer-bg.jpg')}})">
       
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-md-6 col-lg-6">
                   <div class="row">
                       <div class="col-xs-12 col-md-4 col-lg-4">
                           <div class="card_footer">
                                <h4>DC COMICS</h4>
                                <ul>
                                    <li> <a href="#">Characters</a> </li>
                                    <li><a href="{{ route('comics') }}">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                           </div>
                       </div>

                       <div class="col-xs-12 col-md-4 col-lg-4">
                           <div class="card_footer">
                                <h4>DC</h4>
                                <ul>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Privacy Policy (New)</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Subscriptions</a></li>
                                    <li><a href="#">Talent Workshop</a></li>
                                    <li><a href="#">CPSC Certificates</a></li>
                                    <li><a href="#">Ratings</a></li>
                                    <li><a href="#">Shop Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                           </div>
                       </div>

                       <div class="col-xs-12 col-md-4 col-lg-4">
                           <div class="card_footer">
                                <h4>SITES</h4>
                                <ul>
                                    <li><a href="#">DC</a></li>
                                    <li><a href="#">MAD Magazine</a></li>
                                    <li><a href="#">DC Kids</a></li>
                                    <li><a href="#">DC Universe</a></li>
                                    <li><a href="#">DC Shop</a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="copyright">
                            <p> All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>
                       </div>
                   </div>
               </div>

               <div class="col-xs-12 col-md-6 col-lg-6">
                   <div class="background_logo">
                       <img src="{{asset('img/logo-background-v2.png')}}">
                   </div>
               </div>
               
           </div>
       </div>
    </div>

    <div class="lower_footer">
        <div class="container">
            <div class="signup">
                <a href="#">SIGN-UP NOW!</a>
            </div>

            <div class="socials">
                <strong>FOLLOW US</strong>
                <img src="{{ asset('img/footer-facebook.png') }}" alt="facebook logo">
                <img src="{{ asset('img/footer-twitter.png') }}" alt="facebook logo">
                <img src="{{ asset('img/footer-youtube.png') }}" alt="facebook logo">
                <img src="{{ asset('img/footer-pinterest.png') }}" alt="facebook logo">
                <img src="{{ asset('img/footer-periscope.png') }}" alt="facebook logo">
            </div>
        </div>
    </div>
</footer>