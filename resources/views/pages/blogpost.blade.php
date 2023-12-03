@extends('cesn_page')
@section('content')
    @include('partials._banner_inner')

    <main>
        <div class="lgx-post-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <article>
                                <header>
                                    <div class="text-area">
                                        <div class="container-fluid" style="margin-top: 6.8rem">
                                            <div id="lgx-photo-gallery" class="lgx-photo-gallery">
                                                <div id="lgx-owlgallery" class="lgx-owlgallery">
                                                    @foreach($post->images as $image)
                                                    <div class="item">
                                                        <div  class="lgx-gallery-single">
                                                            <figure>
                                                                <img title="{{$post->title}}" src="{{uploaded($image->image_path)}}" alt="{{$post->title}} {{$image->id}}"/>
                                                                <figcaption class="lgx-figcaption">
                                                                    <div class="lgx-hover-link">
                                                                        <div class="lgx-vertical">
                                                                            <a title="{{$post->title}}" href="{{uploaded($image->image_path)}}">
                                                                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div> <!--//.Item-->
                                                    @endforeach
                                                </div><!--l//#lgx-OWL NEWS-->
                                            </div>
                                        </div>

                                        <h1 class="title">{{$post->title}}</h1>
                                    </div>
                                </header>
                                <section>
                                    {!! $post->body !!}
                                </section>
                                <!--footer>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="title">Share</h4>
                                            <div class="lgx-share">
                                                <ul class="list-inline lgx-social">
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </footer-->
                            </article>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>

@endsection


@section('page_meta_description')Ceglédi Extrémsport nap - Blog - {{$post->meta_description}}@endsection
@section('page_meta_keywords'){{$post->meta_keywords}}@endsection
@section('page_title')Ceglédi Extrémsport nap - Blog - {{$post->title}}@endsection