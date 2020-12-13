<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        @include('theme.partials.header')
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        @unless($user->longitude==null ?? $user->latitude==null)
            <div id="map"></div>
        @endunless
        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" method="POST" action="{{ route('sendEmail') }}">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                    <button class="btn btn-custom" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <div class="contact-info">

                            @if($user->phone != null)
                                <span class="title">Telephone:</span>
                                {{$user->phone}}
						    @endif

                            @if($user->address != null)
                                <div class="divider-line"></div>

                                <span class="title">Address:</span>
                                {{ $user->address }}
                            @endif

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyright 2020 - Matt King Evangelistic Ministries
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
    </div>
    <script>
        @unless($user->longitude==null ?? $user->latitude==null)
            var lat="{{$user->latitude}}";
            var lon="{{$user->longitude}}";
        @endunless
    </script>
    <!-- LOAD JS FILES -->
    <script src="/theme/js/jquery.min.js"></script>
    <script src="/theme/js/bootstrap.min.js"></script>
    <script src="/theme/js/jquery.isotope.min.js"></script>
    <script src="/theme/js/jquery.prettyPhoto.js"></script>
    <script src="/theme/js/easing.js"></script>
    <script src="/theme/js/jquery.ui.totop.js"></script>
    <script src="/theme/js/selectnav.js"></script>
    <script src="/theme/js/ender.js"></script>
    <script src="/theme/js/responsiveslides.min.js"></script>
    <script src="/theme/js/owl.carousel.js"></script>
    <script src="/theme/js/jquery.fitvids.js"></script>
    <script src="/theme/js/jquery.plugin.js"></script>
    <script src="/theme/js/jquery.countdown.js"></script>
    <script src="/theme/js/countdown-custom.js"></script>
    <script src="/theme/js/contact.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFaZiBISBzvu6cS_IuBy8IFMwOSL-OL3A"></script>
    <script src="/theme/js/map.js"></script>
    <script src="/theme/js/wow.min.js"></script>
    <script src="/theme/js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="/theme/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="/theme/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    {{--<script src="/theme/js/rev-setting-1.js"></script>--}}

</body>
</html>
