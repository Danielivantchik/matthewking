<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <!-- logo begin -->
                <div id="logo">
                    <div class="inner">
                        <a href="/">
                            <img src="{{ asset('images/logo.png') }}" alt="Matthew King" width="153">
                            {{-- <div class="logo-1">Matt King</div> --}}
                            {{-- <div class="logo-2">Matt King</div> --}}
                        </a>
                    </div>
                </div>
                <!-- logo close -->

            </div>

            <div class="col-md-8">

                <!-- mainmenu begin -->
                <div id="mainmenu-container">
                    <ul id="mainmenu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/schedule">Schedule</a></li>
                        <li><a href="/invite">Invite</a></li>
                        {{-- <li><a href="/blog">Blog</a></li> --}}
                        <li><a href="http://resurrectionbelgium.com/" target="_blank">Resurrection Belgium</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/preach">Preach</a></li>
                        <li>
                            <a href="#" style="color: rgb(255, 214, 88)">
                                <u>Donate</u>
                            </a>
                            <ul>
                                <li><a href="https://www.paypal.me/mattking38" target="_blank">One-time gift</a></li>
                                <li><a href="https://www.patreon.com/mattking" target="_blank">Reoccuring gift</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- mainmenu close -->
            </div>
            <div class="col-md-2">
                <!-- social icons -->
                <div class="social">
                    @if(\App\User::first()->facebook)
                    <a href="{{ \App\User::first()->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if(\App\User::first()->instagram)
                    <a href="{{ \App\User::first()->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                    @endif
                    @if(\App\User::first()->twitter)
                        <a href="{{ \App\User::first()->twitter }}"><i class="fa fa-twitter"></i></a>
                    @endif
                    <a href="mailto:matthew.king@ibethel.org"><i class="fa fa-envelope-o"></i></a>
                </div>
                <!-- social icons close -->

            </div>
        </div>
    </div>

</header>
