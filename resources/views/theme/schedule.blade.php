<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')

    <style>
        .schedule-image {
            width: 562px;
            height: 400px;
        }
        .card {
            /*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);*/
            /*transition: 0.3s;*/
            /*margin:6%;*/
        }

        .card:hover {
            /*box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);*/
        }

        .card-body {
            /*padding:8px;*/
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
                    {{-- <div class="col-md-6">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top img-responsive" src="http://beta.iopan.co.uk/articles/images/cards/measure.jpg" alt="Measure">
                            <div class="card-body">
                                <h4 class="card-title">Measure</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6 event-item">
                        <div class="card">
                             @if($schedule->photo)
                                {{-- <img src="/storage/{{ $schedule->photo }}" alt="" class="schedule-image"> --}}
                                <img class="card-img-top img-responsive" src="/storage/{{ $schedule->photo }}" style="width: 100%">
                            @else
                                {{-- <img src="{{ asset('img/image-na.jpg') }}" alt="" class="schedule-image"> --}}
                                <img class="card-img-top img-responsive" src="{{ asset('img/image-na.jpg') }}" style="width: 100%">
                            @endif
                            {{-- <div class="desc"> --}}
                            <div class="card-body desc">
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
