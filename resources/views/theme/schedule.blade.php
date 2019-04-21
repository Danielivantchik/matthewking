<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')

    <style>
        .schedule-image {
            width: 100%;
        }
    </style>
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
                @foreach($schedules as $schedule)
                    <div class="col-md-6 event-item">
                         @if($schedule->photo)
                            <img src="/storage/{{ $schedule->photo }}" alt="" class="schedule-image">
                        @else
                            <img src="{{ asset('img/image-na.jpg') }}" alt="" class="schedule-image">
                        @endif
                        <div class="desc">
                            <a href="{{ $schedule->organizer_website }}" target="_blank">
                                <h2>{{ $schedule->title }}</h2>
                            </a>
                            <h4>{{  $schedule->date }}</h4>
                            <h4>{{  $schedule->organizer }}</h4>
                            <span class="text">
                                <p>{!! $schedule->address !!}</p>
                            </span>
                        </div>
                    </div>
                @endforeach
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
