<section id="page-blog" class="no-padding">

    <div class="fullwidth">
        <div class="one-fourth text-center">
            <div class="title-area">
                <span>Latest</span>
                <h1>Blog</h1>
            </div>
        </div>

        <div class="three-fourth">
            <div class="custom-carousel-2">

                @foreach($posts as $post)
                <div class="item-blog">
                    <div class="inner">
                        <span class="date">{{ $post->created_at->format("Y-M-d") }}</span>
                        <a href="/blog/{{ $post->slug }}">
                            <h3>{{ $post->title }}</h3>
                        </a>
                        <span class="desc">
                            @if($post->description)
                                {{ str_limit($post->description, 200) }}
                            @else
                                {!! str_limit($post->body, 200) !!}
                            @endif
                        </span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
