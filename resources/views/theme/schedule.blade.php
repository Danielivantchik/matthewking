<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
    <div id="wrapper">
        @include('theme.partials.header')
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Events</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>
        <div id="content">

            <div class="container">
                <div class="row">

                    <div class="col-md-6 event-item">
                        <div class="inner">
                            <div class="left-col">
                                <img src="img/events/pic (2).jpg" alt="">
                            </div>
                            <div class="right-col">
                                <span class="date">10</span>
                                <span class="month">FEB</span>
                                <span class="time">10:00 am</span>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="#">
                                <h3>Transforming Live</h3>
                            </a>
                            <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content close -->

        @include('theme.partials.footer')
    </div>
    <script src="{{ asset('/theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/theme/js/easing.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.ui.totop.js') }}"></script>
    <script src="{{ asset('/theme/js/selectnav.js') }}"></script>
    <script src="{{ asset('/theme/js/ender.js') }}"></script>
    <script src="{{ asset('/theme/js/responsiveslides.min.js') }}"></script>
    <script src="{{ asset('/theme/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('/theme/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('/theme/js/countdown-custom.js') }}"></script>
    <script src="{{ asset('/theme/js/wow.min.js') }}"></script>
    <script src="{{ asset('/theme/js/custom.js') }}"></script>

</body>
</html>
