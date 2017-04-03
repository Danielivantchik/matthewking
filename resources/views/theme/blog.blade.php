<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.partials.head')
</head>

<body>
{{--<div id="preloader"></div>--}}
<div id="wrapper">
@include('theme.partials.header')

<!-- subheader begin -->
    <section id="subheader" data-speed="2" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="blog-list">
                        @foreach($posts as $post)
                            <li>
                                <div class="info">
                                    <div class="date-box">
                                        <span class="day">{{ $post->updated_at->format("d") }}</span>
                                        <span class="month">{{ $post->updated_at->format("M") }}</span>
                                    </div>
                                </div>
                                <div class="preview">
                                    @if($post->photo != null)
                                        <img src="/storage/{{ $post->photo }}" alt=""/>
                                    @else
                                        <img src="{{ asset('theme/img/blog/pic-blog-1.jpg') }}" alt=""/>
                                    @endif
                                    <a href="/blog/{{ $post->slug }}">
                                        <h3 class="blog-title">{{ $post->title }}</h3>
                                    </a>
                                    {{ $post->description }}
                                </div>
                                <div class="meta-info">By:
                                    <a href="#">Matthew King</a>
                                    <span>|</span>
                                    @foreach($post->tags as $tag)
                                        <a href="/blog?tag={{ $tag->slug }}">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="clearfix"></div>

                    <div class="text-center">
                        {{ $posts->links() }}
                    </div>
                </div>

                <div id="sidebar" class="col-md-4">
                    <!-- widget tags -->
                    <div class="widget widget_tags">
                        <h3><span>Tags</span></h3>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="/blog?tag={{ $tag->slug }}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- content close -->

    <!-- footer begin -->
@include('theme.partials.footer')
<!-- footer close -->
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
