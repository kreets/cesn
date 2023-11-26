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
                                <a class="profile-img"><img src="http://placehold.it/800x860" alt="Speaker"/></a>
                                <figcaption>
                                    <div class="social-group">
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
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