<!--ABOUT-->
<section>
    <div id="rolunk" class="lgx-about lgx-about2" style="background: url({{url('storage')}}/{{setting('site.about_cover_image')}}) bottom no-repeat;">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-5 col-sm-12 col-md-7">
                        <div class="lgx-about-content-area">
                            <div class="lgx-heading">
                                <h2 class="heading">{{getPage('rolunk')->title}}</h2>
                                <h3 class="subheading">{{getPage('rolunk')->subtitle}}</h3>
                            </div>
                            <div class="lgx-about-content">
                                <p class="text">
                                    {{getPage('rolunk')->excerpt}}
                                </p>
                                <div class="section-btn-area">
                                    <a class="lgx-btn" href="{{route('page', 'rolunk')}}">bővebben</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--ABOUT END-->