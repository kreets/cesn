<!--PHOTO GALLERY-->
<section>
    <div id="lgx-photo-gallery" class="lgx-gallery-popup lgx-photo-gallery-normal">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading">{{getPage('galeria')->title}}</h2>
                            <h3 class="subheading">{{getPage('galeria')->subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-gallery-area">
                            @foreach(galleryImages($limit ?? null) as $image)

                                <div  class="lgx-gallery-single">
                                    <figure>
                                        <img title="Memories One" src="{{uploaded($image->image_path)}}" alt=""/>
                                        <figcaption class="lgx-figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a title="" href="{{uploaded($image->image_path)}}">
                                                        <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PHOTO GALLERY END-->