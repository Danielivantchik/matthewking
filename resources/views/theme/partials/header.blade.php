<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <!-- logo begin -->
                <div id="logo">
                    <div class="inner">
                        <a href="/">
                            <div class="logo-1">Matt King</div>
                            <div class="logo-2">Matt King</div>
                        </a>
                    </div>
                </div>
                <!-- logo close -->

            </div>

            <div class="col-md-9">

                <!-- mainmenu begin -->
                <div id="mainmenu-container">
                    <ul id="mainmenu">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="/invite">Invite</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li>
                            <a href="#" style="color: rgb(255, 214, 88)">
                                <u>Donate</u>
                            </a>
                            <ul>
                                <li><a href="https://www.paypal.me/mattking38" target="_blank">Paypall</a></li>
                                <li><a href="https://www.patreon.com/mattking" target="_blank">Patreon</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- mainmenu close -->

                <!-- social icons -->
                <div class="social">
                    @if(auth()->user()->facebook)
                    <a href="{{ auth()->user()->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if(auth()->user()->instagram)
                    <a href="{{ auth()->user()->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                    @endif
                    @if(auth()->user()->twitter)
                        <a href="{{ auth()->user()->twitter }}"><i class="fa fa-twitter"></i></a>
                    @endif
                    <a href="mailto:matthew.king@ibethel.org"><i class="fa fa-envelope-o"></i></a>
                </div>
                <!-- social icons close -->

            </div>
        </div>
    </div>

</header>
