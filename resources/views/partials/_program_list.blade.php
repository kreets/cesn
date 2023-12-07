<!--SPEAKERS-->
<section>
    <div id="programok" class="lgx-speakers lgx-speakers2">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading ">
                            <h2 class="heading">{{getPage("programok")->title}}</h2>
                            <h3 class="subheading">{{getPage("programok")->subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(getPrograms($limit ?? null) as $program)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-speaker">
                            <figure>
                                <a class="profile-img"><img src="{{uploaded($program->getImage())}}" alt="{{$program->title}}"/></a>
                                <figcaption>
                                    <div class="social-group">
                                        @if($program->twitter) <a class="sp-tw" href="{{$program->twitter}}"><i class="fa fa-twitter"></i></a> @endif
                                        @if($program->facebook)<a class="sp-fb" href="{{$program->facebook}}"><i class="fa fa-facebook"></i></a> @endif
                                        @if($program->instagram)<a class="sp-insta" href="{{$program->instagram}}"><i class="fa fa-instagram"></i></a> @endif

                                    </div>
                                    <div class="speaker-info">
                                        <h3 class="title"><a >{{$program->title}}</a></h3>
                                        <h4 class="subtitle">{{$program->performer}}</h4>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--//.ROW-->
                @if($limit ?? false)
                <div class="section-btn-area">
                    <a class="lgx-btn lgx-btn-big" href="{{route('page', 'programok')}}"><span>további programok</span></a>
                </div>
                @endif
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--SPEAKERS END-->