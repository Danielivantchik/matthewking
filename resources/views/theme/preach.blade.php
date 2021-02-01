<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        @include('theme.partials.header')
        <style>
            .invalid-feedback {
                display: block;
            }
        </style>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Preach.</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('failure'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('failure') }}
                                </div>
                            @endif
                                <img src="{{ asset('images/preachLogo.png') }}" alt="Matthew King" width="153">
                                <br>
                                BERGEN, NORWAY
                                <br><br>

                                <b>Gathering of European evangelists - online</b><br>
                                Invitation only<br>
                                April 15th, 2021<br>
                                Invitations with information will be distributed by email<br>
                                <br>
                                <b>Gathering of European established evangelists</b><br>
                                Invitation only<br>
                                Autumn 2021 (exact date to be announced soon)<br>
                                Begin at 12 noon with lunch together<br>
                                Finish at 9:30pm on Thursday night<br>
                                <br>
                                <b>Evangelism conference</b><br>
                                Ticketed event- open to all persons<br>
                                Autumn 2021 (exact date to be announced soon)<br>
                                Begin at 10am on the Friday<br>
                                Finish at 10pm on the Saturday night<br>
                                <br><br>
                            <h1>Subscribe to get more information!</h1>

                            <form action="{{url('/newsletter')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="firstname">First name</label>
                                    <input id="firstname" name="firstname" type="text" class="form-control is-invalid"
                                           placeholder="Matthew"/>
                                    @if($errors->has('firstname'))
                                        <small class="form-text invalid-feedback">This field is required.</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last name</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control is-invalid"
                                           placeholder="King"/>
                                    @if($errors->has('lastname'))
                                        <small class="form-text invalid-feedback">This field is required.</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control is-invalid"
                                           placeholder="example@gmail.com"/>
                                    @if($errors->has('email'))
                                        <small class="form-text invalid-feedback">This field is required.</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control" value="Subscribe"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 50px"></div>
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
                                <li><a href="/home">Home</a></li>
                                <li><a href="/schedule">Events</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
    </div>
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
