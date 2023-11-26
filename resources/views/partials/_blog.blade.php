<!--Blog-->
<section>
    <div id="blog" class="lgx-news">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading">{{getPage('blog')->title}}</h2>
                            <h3 class="subheading">{{getPage('blog')->subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(getBlogPosts($limit ?? null) as $post)
                    <div class="col-xs-12 col-sm-6">
                        <div class="lgx-single-news">
                            <figure>
                                <a href="{{route('blogpost', $post->slug)}}"><img src="{{uploaded($post->leadImg())}}" alt=""></a>
                            </figure>
                            <div class="single-news-info">
                                <div class="meta-wrapper">
                                    <span>{{$post->getDate()}}</span>
                                </div>
                                <h3 class="title"><a href="{{route('blogpost', $post->slug)}}">{{$post->excerpt}}</a></h3>
                                <a class="lgx-btn lgx-btn-white lgx-btn-sm" href="{{route('blogpost', $post->slug)}}"><span>Tovább</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($limit ?? false)
                <div class="section-btn-area">
                    <a class="lgx-btn" href="{{route('page', 'blog')}}">További cikkek</a>
                </div>
                @endif
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--Blog END-->