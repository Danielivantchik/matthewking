<section id="page-events" class="no-padding">
    <div class="fullwidth">
        <div class="one-fourth text-center">
            <div class="title-area wow">
                <h1>Schedule</h1>
            </div>
        </div>

        <div class="three-fourth">
            <div class="fx custom-carousel-1">

                @foreach($schedules as $schedule)
                <div class="item">
                    <div class="overlay">
                        <span class="time">{{ $schedule->date }}</span>
                        <a href="#">
                            <h3>{{ $schedule->title }}</h3>
                        </a>
                        <span class="desc">
                            {{ $schedule->address }}
                        </span>
                    </div>
                    @if($schedule->photo)
                        <img src="{{ $schedule->photo }}" alt="" width="640" height="480">
                    @else
                        <img src="{{ asset('img/image-na.jpg') }}" alt="">
                    @endif
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</section>
