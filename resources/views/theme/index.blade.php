<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
	{{--<div id="preloader"></div>--}}
    <div id="wrapper">
        {{-- Menu --}}
       @include('theme.partials.header')

        {{-- Slider --}}
        @include('theme.partials.slider')

        <div class="clearfix"></div>

        {{-- Content begins --}}
        <div id="content" class="no-padding">

            {{-- Schedule --}}
            @include('theme.partials.schedule')

            {{-- Countdown --}}
            {{-- @include('theme.partials.countdown') --}}

			{{-- Homepage articles (max 3 articles)--}}
            @include('theme.partials.homepagearticles')

            {{-- Homepage latest videos (latest 3 videos)--}}
            @include('theme.partials.latestvideos')

            {{-- homepage about --}}
            @include('theme.partials.homepageabout')

            {{-- Homepage blog posts --}}
            @include('theme.partials.homepageblog')

            {{-- Gallery --}}
            {{-- @include('theme.partials.gallery') --}}

            {{-- Testimonies --}}
            @include('theme.partials.testimonies')

        </div>
        {{-- Footer --}}
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

    <script src="{{ asset('/theme/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('/theme/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
</body>
</html>
