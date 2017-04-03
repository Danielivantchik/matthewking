<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
	{{--<div id="preloader"></div>--}}
    <div id="wrapper">
        @include('theme.partials.header')
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Blog Post title</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-read">
                            <div>
                                <div class="info">
                                    <div class="date-box">
                                        <span class="day">28</span>
                                        <span class="month">SEP</span>
                                    </div>
                                </div>
                                <div class="preview">
                                    <img src="/theme/img/blog/pic-blog-1.jpg" alt="">
                                    <a href="#">
                                        <h3 class="blog-title">Lorem ipsum dolor sit amet</h3>
                                    </a>
                                    <p>
                                        <a href="#"></a>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur </p>
                                </div>
                                <div class="meta-info">By: <a href="#">Admin</a><span>|</span><a href="#">Event</a>, <a href="#">Promotion</a></div>
                            </div>
                        </div>

                        {{-- Add disqus comments --}}

                    </div>

                    <div id="sidebar" class="col-md-4">
                        <div class="widget widget_tags">
                            <h3><span>Tags</span></h3>
                            <ul>
                                <li><a href="#link">course</a></li>
                                <li><a href="#link">responsive</a></li>
                                <li><a href="#link">css3</a></li>
                                <li><a href="#link">html5</a></li>
                                <li><a href="#link">website</a></li>
                                <li><a href="#link">template</a></li>
                                <li><a href="#link">elegant</a></li>
                                <li><a href="#link">clean</a></li>
                                <li><a href="#link">jquery</a></li>
                                <li><a href="#link">php</a></li>
                                <li><a href="#link">html</a></li>
                                <li><a href="#link">css</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>

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
